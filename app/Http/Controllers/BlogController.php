<?php

namespace App\Http\Controllers;

use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\Response as Response;
use ButterCMS\ButterCMS;

class BlogController extends BaseController {

  private static $apiToken = 'de55d3f93789d4c5c26fb07445b680e8bca843bd';
  private $client;

  public function __construct() {
    $this->client = new ButterCMS(BlogController::$apiToken);
  }

  public function listAllPosts(int $page = 1) {
    $response = $this->client->fetchPosts([ 
      'page' => $page,
      'page_size' => 10
    ]);
    return view('posts', [
      'posts' => $response->getPosts(),
      'nextPage' => $response->getMeta()['next_page'],
      'previousPage' => $response->getMeta()['previous_page']
    ]);
  }

  public function showPost(string $slug) {
    $response = $this->client->fetchPost($slug);
    $post = $response->getPost();
    return view('post', [
      'post' => $post,
      'published' => date('j/n/Y', strtotime($post->getPublished())),
    ]);
  }

  public function listAllAuthors() {
    $response = $this->client->fetchAuthors();
    return view('authors', [
      'authors' => $response,
    ]);
  }

  public function showAuthor(string $slug, int $page = 1) {
    $authorResponse = $this->client->fetchAuthor($slug);
    $postsResponse = $this->client->fetchPosts([ 
      'author_slug' => $slug,
      'page' => $page,
      'page_size' => 10
    ]);
    return view('author', [
      'posts' => $postsResponse->getPosts(),
      'author' => $authorResponse,
      'nextPage' => $postsResponse->getMeta()['next_page'],
      'previousPage' => $postsResponse->getMeta()['previous_page']
    ]);
  }

  public function listAllCategories() {
    $response = $this->client->fetchCategories();
    return view('categories', [
      'categories' => $response,
    ]);
  }

  public function showCategory(string $slug, int $page = 1) {
    $categoryResponse = $this->client->fetchCategory($slug);
    $postsResponse = $this->client->fetchPosts([ 
      'category_slug' => $slug,
      'page' => $page,
      'page_size' => 10
    ]);
    return view('category', [
      'posts' => $postsResponse->getPosts(),
      'category' => $categoryResponse,
      'nextPage' => $postsResponse->getMeta()['next_page'],
      'previousPage' => $postsResponse->getMeta()['previous_page']
    ]);
  }

  public function listAllTags() {
    $response = $this->client->fetchTags();
    return view('tags', [
      'tags' => $response,
    ]);
  }

  public function showTag(string $slug, int $page = 1) {
    $tagResponse = $this->client->fetchTag($slug);
    $postsResponse = $this->client->fetchPosts([ 
      'tag_slug' => $slug,
      'page' => $page,
      'page_size' => 10
    ]);
    return view('tag', [
      'posts' => $postsResponse->getPosts(),
      'tag' => $tagResponse,
      'nextPage' => $postsResponse->getMeta()['next_page'],
      'previousPage' => $postsResponse->getMeta()['previous_page']
    ]);
  }

  public function showFaq() {
    $response = $this->client->fetchContentFields([
      'faq_headline',
      'faq_items'
    ]);
    return view('faq', [
      'faqHeadline' => $response['faq_headline'],
      'faqItems' => $response['faq_items']
    ]);
  }

  public function listAllLocations() {
    return view('locations');
  }

  public function showLocation(string $slug) {
    $response = $this->client->fetchContentFields(["location_pages[slug=${slug}]"]);
    $page = $response['location_pages'][0];
    return view('location', [
      'featureImage' => $page['feature_image'],
      'name' => $page['name'],
      'description' => $page['description'],
    ]);
  }

  public function showRSS() {
    return Response::make(
      $this->client->fetchFeed('rss')->asXML(),
      200, 
      ['Content-Type' => 'text/xml']
    );
  }

  public function showAtom() {
    return Response::make(
      $this->client->fetchFeed('atom')->asXML(),
      200, 
      ['Content-Type' => 'text/xml']
    );
  }

  public function showSitemap() {
    return Response::make(
      $this->client->fetchFeed('sitemap')->asXML(),
      200, 
      ['Content-Type' => 'text/xml']
    );
  }

}