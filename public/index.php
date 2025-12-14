<?php 
session_start();

// ambil parameter "page" dari url;
$page = $_GET['page'] ?? 'home';
$kategori_id = $_GET['kategori_id'] ?? '';

switch ($page) {

    // user pages
    case 'home':
        require '../views/user/home.php';
        break;
    
    case 'about':
        require '../views/user/about.php';
        break;

    case 'products':
        require '../views/user/product.php';
        break;

    case 'detail':
        require '../views/user/product_detail.php';
        break;

    case 'contact':
        require '../views/user/contact.php';
        break;

    case 'testimoni':
        require '../views/user/testimoni.php';
        break;

    // auth
    
    case 'login':
        require '../views/auth/login.php';
        break;

    case 'register':
        require '../views/auth/register.php';
        break;
        
    case 'cart':
        require '../views/user/cart.php';
        break;
        
    case 'logout':
        session_destroy();
        header("location: index.php?page=home");
        exit;
        
    // user admin
            
    case 'admin':
        require '../views/admin/dashboard.php';
        break;
        
    case 'admin-produk':
        require '../views/admin/product_list.php';
        break;
        
    case 'admin-produk-edit':
        require '../views/admin/product_edit.php';
        break;
        
    // 
    default:
        require '../views/user/home.php';
        break;
    
};

?>