<?php

namespace app\controllers;

use Yii;
use app\models\Penyakit;
use app\models\PenyakitSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\web\UploadedFile;

/**
 * PenyakitController implements the CRUD actions for Penyakit model.
 */
class PenyakitController extends Controller
{
    /**
     * @inheritdoc
     */
    public function behaviors()
    {
        return [
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['POST'],
                ],
            ],
        ];
    }

    /**
     * Lists all Penyakit models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new PenyakitSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        if(Yii::$app->request->get('export')) {
            return $this->exportExcel(Yii::$app->request->queryParams);
        }

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Penyakit model.
     * @param integer $id
     * @return mixed
     */
    public function actionView($id)
    {
        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }

    /**
     * Creates a new Penyakit model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
     public function actionCreate()
    {
        $model = new Penyakit();
        if ($model->load(Yii::$app->request->post()) ) {
            
            $gambar = UploadedFile::getInstance($model,'gambar');
            if($gambar !== null){
                $model->gambar = $gambar->baseName . Yii::$app->formatter->asTimestamp(date('Y')) . '.' . $gambar->extension;
                /*print $cover->extension;
                die;*/
            }
            if($model->save()) {
                    if ($gambar!==null) {
                        $path = Yii::getAlias('@app').'/web/uploads/';
                        $gambar->saveAs($path.$model->gambar, false);
                }
            Yii::$app->session->setFlash('success','Data berhasil disimpan.');
            return $this->redirect(['view', 'id' => $model->id]);
             }
             Yii::$app->session->setFlash('error','Data gagal disimpan. Silahkan periksa kembali isian Anda.');
        } 
            return $this->render('create', [
                'model' => $model,
            ]);
    }

    /**
     * Updates an existing Penyakit model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     */
  public function actionUpdate($id)
    {
        $model = $this->findModel($id);
        $foto_lama = $model->gambar;
        if ($model->load(Yii::$app->request->post()) ) {
            $gambar = UploadedFile::getInstance($model,'gambar');
             if($gambar !== null){
                $model->gambar = $gambar->baseName . Yii::$app->formatter->asTimestamp(date('Y-d-m h:i:s')) . '.' . $gambar->extension;
            } else {
                $model->gambar = $foto_lama;
            }
            if($model->save()) {
                    if ($gambar!==null) {
                        $path = Yii::getAlias('@app').'/web/uploads/';
                        $gambar->saveAs($path.$model->gambar, false);
                     }
            Yii::$app->session->setFlash('success','Data berhasil disimpan.');
            return $this->redirect(['view', 'id' => $model->id]);
            } 
            Yii::$app->session->setFlash('error','Data gagal disimpan. Silahkan periksa kembali isian Anda.');
        }
            return $this->render('update', [
                'model' => $model,
            ]);
    }

    public function actionDelete($id)
    {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Penyakit model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Penyakit the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Penyakit::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }

    public function exportExcel($params)
    {
        $PHPExcel = new \PHPExcel();

        $PHPExcel->setActiveSheetIndex();

        $sheet = $PHPExcel->getActiveSheet();

        $sheet->getDefaultStyle()->getAlignment()->setWrapText(true);
        $sheet->getDefaultStyle()->getAlignment()->setVertical(\PHPExcel_Style_Alignment::VERTICAL_CENTER);

        $setBorderArray = array(
            'borders' => array(
                'allborders' => array(
                    'style' => \PHPExcel_Style_Border::BORDER_THIN
                )
            )
        );


        $sheet->getColumnDimension('A')->setWidth(10);
        $sheet->getColumnDimension('B')->setWidth(20);
        $sheet->getColumnDimension('C')->setWidth(20);
        $sheet->getColumnDimension('D')->setWidth(20);
        $sheet->getColumnDimension('E')->setWidth(20);
        $sheet->getColumnDimension('F')->setWidth(20);
        $sheet->getColumnDimension('G')->setWidth(20);

        $sheet->setCellValue('A3', 'No');
        $sheet->setCellValue('B3', 'Id Tag Penyakit');
        $sheet->setCellValue('C3', 'Nama');
        $sheet->setCellValue('D3', 'Isi');
        $sheet->setCellValue('E3', 'Solusi');
        $sheet->setCellValue('F3', 'Gambar');
        $sheet->setCellValue('G3', 'Id Penyakit');

        $PHPExcel->getActiveSheet()->setCellValue('A1', 'Data Penyakit');

        $PHPExcel->getActiveSheet()->mergeCells('A1:G1');

        $sheet->getStyle('A1:G3')->getFont()->setBold(true);
        $sheet->getStyle('A1:G3')->getAlignment()->setHorizontal(\PHPExcel_Style_Alignment::HORIZONTAL_CENTER);

        $row = 3;
        $i=1;

        $searchModel = new PenyakitSearch();

        foreach($searchModel->getQuerySearch($params)->all() as $data){
            $row++;
            $sheet->setCellValue('A' . $row, $i);
            $sheet->setCellValue('B' . $row, $data->id_tag_penyakit);
            $sheet->setCellValue('C' . $row, $data->nama);
            $sheet->setCellValue('D' . $row, $data->isi);
            $sheet->setCellValue('E' . $row, $data->solusi);
            $sheet->setCellValue('F' . $row, $data->gambar);
            $sheet->setCellValue('G' . $row, $data->id_penyakit);
            
            $i++;
        }

        $sheet->getStyle('A3:G' . $row)->getAlignment()->setHorizontal(\PHPExcel_Style_Alignment::HORIZONTAL_CENTER);
        $sheet->getStyle('D3:G' . $row)->getAlignment()->setHorizontal(\PHPExcel_Style_Alignment::HORIZONTAL_CENTER);
        $sheet->getStyle('E3:G' . $row)->getAlignment()->setHorizontal(\PHPExcel_Style_Alignment::HORIZONTAL_CENTER);


        $sheet->getStyle('C' . $row)->getAlignment()->setHorizontal(\PHPExcel_Style_Alignment::HORIZONTAL_CENTER);

        $sheet->getStyle('A3:G' . $row)->applyFromArray($setBorderArray);

        $path = 'exports/';
        $filename = time() . '_DataPenduduk.xlsx';
        $objWriter = \PHPExcel_IOFactory::createWriter($PHPExcel, 'Excel2007');
        $objWriter->save($path.$filename);
        return Yii::$app->getResponse()->redirect($path.$filename);
    }

}
