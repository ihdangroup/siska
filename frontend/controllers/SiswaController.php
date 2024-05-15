<?php
namespace frontend\controllers;
use Yii;
use frontend\models\SiswaModel;
use yii\web\Controller;
class SiswaController extends Controller
{
    public function actionIndex()
    {
        // echo "<h2>ini dirender langsung dari SiswaController</h2>";
        $url = Yii::$app->request->absoluteURL;
        return $this->render('siswa', ['link' => $url]);
    }
    public function actionInformatika($id)
    {
        $url = Yii::$app->request->absoluteURL;
        return $this->render('informatika', ['id' => $id, 'link' => $url]);
    }
    public function actionView($id)
    {
        $siswa_baru = new SiswaModel();
        $siswa_baru->nisn = '4567';
        $siswa_baru->namaLengkap = 'Ikhdan Maghfuron';
        $siswa_baru->jenisKelamin = SiswaModel::LAKI_LAKI;
        $url = Yii::$app->request->absoluteURL;
        return $this->render('view', ['id' => $id, 'link' => $url, 'siswa' => $siswa_baru]);
    }
}

?>