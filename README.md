# Perlu di Ingat !

> untuk membuat variabel dengan cara :
``` bash
$data['news'] = $this->news_model->get_news();
$data['title'] = 'Arsip Berita';
```
maka isi dari $data adalah variabel news dan variabel title dan bisa kita panggil dengan contoh pemanggilan :
``` bash
$this->load->view('news/index', $data);
```
> Pemanggilan library, helper, dll bisa di deklarasikan melalui config/autoload.php (untuk pemanggilan global) atau langsung dimasukan ke function coding dengan cara :
``` bash
$this->load->helper('url'); //contoh pemanggilan helper url dengan code langsung
$this->load->database(); //contoh pemanggilan library database untuk menjalankan perintah SQL
```