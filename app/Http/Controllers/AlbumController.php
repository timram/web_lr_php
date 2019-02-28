<?php
namespace App\Http\Controllers;

class AlbumController extends Controller {
  public function __construct() {
    $this->viewName = 'album';
    $this->viewParams = [
      'images' => [
        [
          'image' => 'img/1.jpg',
          'title' => 'Картинка 2',
          'description' => 'Описание картинки 2'
        ],
        [
            'image' => 'img/2.jpeg',
            'title' => 'Картинка 3',
            'description' => 'Описание картинки 3'
        ],
        [
            'image' => 'img/3.jpg',
            'title' => 'Картинка 4',
            'description' => 'Описание картинки 4'
        ],
        [
            'image' => 'img/4.jpeg',
            'title' => 'Картинка 5',
            'description' => 'Описание картинки 5'
        ],
        [
            'image' => 'img/5.jpg',
            'title' => 'Картинка 6',
            'description' => 'Описание картинки 6'
        ],
        [
            'image' => 'img/6.jpeg',
            'title' => 'Картинка 7',
            'description' => 'Описание картинки 7'
        ],
        [
            'image' => 'img/7.jpeg',
            'title' => 'Картинка 8',
            'description' => 'Описание картинки 8'
        ],
        [
            'image' => 'img/8.jpeg',
            'title' => 'Картинка 9',
            'description' => 'Описание картинки 9'
        ],
        [
            'image' => 'img/9.jpeg',
            'title' => 'Картинка 10',
            'description' => 'Описание картинки 10'
        ],
        [
            'image' => 'img/10.jpeg',
            'title' => 'Картинка 11',
            'description' => 'Описание картинки 11'
        ],
        [
            'image' => 'img/11.jpeg',
            'title' => 'Картинка 12',
            'description' => 'Описание картинки 12'
        ],
        [
            'image' => 'img/12.jpg',
            'title' => 'Картинка 1',
            'description' => 'Описание картинки 1'
        ],
        [
            'image' => 'img/13.jpg',
            'title' => 'Картинка 13',
            'description' => 'Описание картинки 13'
        ],
        [
            'image' => 'img/14.jpeg',
            'title' => 'Картинка 14',
            'description' => 'Описание картинки 14'
        ],
        [
            'image' => 'img/15.png',
            'title' => 'Картинка 15',
            'description' => 'Описание картинки 15'
        ]
      ]
    ];
  }
}
?>