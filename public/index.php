<?php
// **View: Category List (views/category_list.php)**
$page_title = "Categories";
$content = 'category_list_content.php';
include 'views/base.php';
?>

<?php
// **View Content: Category List Content (views/category_list_content.php)**
?>


<?php
// **Index (index.php)**
// ********************
//  This is the entry point of your application.  It handles
//  routing the request to the appropriate controller.
include 'db_config.php';  // Include database configuration
include 'database.php';  // Include database class
include 'models/Product.php';     // Include the Product model
include 'models/Category.php';    // Include the Category model
include 'controllers/ProductController.php'; // Include the Product controller
include 'controllers/CategoryController.php';//Include the Category Controller

// Create instances of the models and controllers
$database = new Database();
$productModel = new Product($database);
$categoryModel = new Category($database);
$productController = new ProductController($productModel, $categoryModel);
$categoryController = new CategoryController($categoryModel); //Instantiate Category Controller

// Determine the action to perform
$action = isset($_GET['action']) ? $_GET['action'] : 'index';
$id = isset($_GET['id']) ? $_GET['id'] : null;
$category_id = isset($_GET['category_id']) ? $_GET['category_id'] : null; //Get category ID

// Route the request
switch ($action) {
    case 'show':
        $productController->show($id);
        break;
    case 'list_by_category':
        $productController->listByCategory($category_id);
        break;
     case 'categories': // New case to handle category listing
        $categoryController->index();
        break;
    default:
        $productController->index();
        break;
}
?>