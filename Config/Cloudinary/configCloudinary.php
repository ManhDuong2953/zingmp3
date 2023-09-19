<?php

require 'vendor/autoload.php';




use Cloudinary\Cloudinary;

$cloudinary = new Cloudinary([
  'cloud' => [
    'cloud_name' => 'dnhps1jbn',
    'api_key' => '649256297695521',
    'api_secret' => 'SASuY-4crMkOU0GBxzKxNYC9EQo'
  ],
  'url' => [
    'secure' => true
  ]
]);




$response = $cloudinary->uploadApi()->upload(
  "../../Component/assets/y2mate.com - Grow Up  Guhancci Remix  Exclusive Team  Nhạc Nền Gậy Nghiện Hot Tik Tok Việt Nam .mp3",
  [
    "public_id" => "song1", // Đặt public_id của tệp âm thanh
    "resource_type" => "auto", // Xác định loại tài nguyên (auto tự động phát hiện)
    "folder" => "audio", // Đặt thư mục lưu trữ
    "overwrite" => true // Ghi đè lên tệp nếu đã tồn tại
  ]
);


// Lấy URL của hình ảnh từ kết quả
$imageUrl = $response["secure_url"];

echo "URL của hình ảnh: " . $imageUrl;
