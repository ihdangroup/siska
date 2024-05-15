<?php
namespace frontend\models;
use Yii;
use yii\base\Model;
class SiswaModel extends Model
{
    const LAKI_LAKI = 'L';
    const PEREMPUAN = 'P';

    public $nisn;
    public $namaLengkap;
    public $jenisKelamin;
}
?>