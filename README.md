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
