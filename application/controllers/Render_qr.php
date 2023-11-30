<?php

use Endroid\QrCode\QrCode;

defined('BASEPATH') or exit('No direct script access allowed');


class Render_qr extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('Ciqrcode');
    }

    public function QRcode_kms_mc($kode = '')
    {
        $link = 'https://jmtm-kms.kintekindo.net/taggihan_kontrak_admin/tagihan_kontrak/buat_tagihan/'. $kode;

        $qrCode = new Endroid\QrCode\QrCode($link);
        $qrCode->setLabel($kode);
        header('Content-Type: ' . $qrCode->getContentType());
        $qrCode->setLogoPath('assets/image/jmtmqr.png');
        $qrCode->setLogoSize(110, 35);
        $qrCode->setValidateResult(false);
        echo $qrCode->writeString();
    }
}
