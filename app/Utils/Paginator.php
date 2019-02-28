<?php
namespace App\Utils;
use Illuminate\Http\Request;

class Paginator {
  protected $model;
  protected $limit = 10;

  public function __construct($config) {
    $this->model = $config['model'];
    if (isset($config['limit'])) {
      $this->limit = $config['limit'];
    }
  }

  public function paginateRequest(Request $req) {
    $page = $req->query('page', 1);
    $limit = $req->query('limit', $this->limit);
    
    $totalCount = $this->model::getTotalAmount();
    $pageCount = ceil($totalCount / $limit);
    $currPage = $page > $pageCount ? $pageCount : $page;

    $leftPage = ($currPage - 2) < 1 ? 1 : ($currPage - 2);
    $rightPage = ($currPage + 2) > $pageCount ? $pageCount : ($currPage + 2);

    return [
      'items' =>$this->model::getRecordsForPagination(
        ($currPage - 1) * $limit,
        $limit
      ),
      'pagination' =>[
        'total' => $pageCount,
        'currentPage' => $currPage,
        'pages' => $this->getPaginationPages($leftPage, $rightPage)
      ]
    ];
  }

  private function getPaginationPages($leftPage, $rightPage) {
    $pages = [];
    for($i = $leftPage; $i <= $rightPage; $i++) {
      array_push($pages, $i);
    }
    return $pages;
  }
}
?>