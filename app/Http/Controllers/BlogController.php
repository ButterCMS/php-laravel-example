<?php

namespace App\Http\Controllers;

use Illuminate\Routing\Controller as BaseController;
use ButterCMS\ButterCMS;

class BlogController extends BaseController {

  private static $authToken = 'b60a008584313ed21803780bc9208557b3b49fbb';
  private $client;

  public function __construct() {
    $this->client = new ButterCMS(BlogController::$authToken);
  }

  public function listPosts(int $page = 1) {
    $response = $this->client->fetchPosts([ "page" => $page ]);
    return view('blog', [
      'posts' => $response->getPosts(),
      'nextPage' => $response->getMeta()['next_page'],
      'previousPage' => $response->getMeta()['previous_page']
    ]);
  }

  public function showPost(string $slug) {
    $response = $this->client->fetchPost($slug);
    return view('post', [
      'post' => $response->getPost()
    ]);
  }

}