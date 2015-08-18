//base url declaration
var base_url = "http://localhost:81/haswatches/haswatches/assets/database";

app.controller ('product', ['$scope', 'FileUploader', '$http',
    function ($scope, FileUploader, $http) {
    category = [];
    subcategory = [];
    $scope.categories = [];
    $scope.subcategories = [];

    //fetch designer categories with a promise
    function getCategories() {
        $http.get(base_url + "/getCategories.php")
            .success(function (category) {
                $scope.categories = category;
                console.log(category);
            });
    };

    //fetch subcategories with a promise
    function getSubCategories() {
        $http.get(base_url + "/getSubCategories.php")
            .success(function (subcategory) {
                $scope.subcategories = subcategory;
                console.log($scope.subcategories);
            });
    };

    //post a category
    $scope.addcategories = function (){
        // alert(base_url + "/addCategories.php?action=add_category");return;
        $http.post( base_url + "/addCategories.php?action=add_category", 
            {
                'category_name': $scope.categoryname, 
                'description': $scope.descrp
            }
            ).success(function (data, status, headers, config) {
                console.log('category added ', data);
            });
        }

    //post a product
    $scope.addproduct = function (){
        // alert(base_url + "/addCategories.php?action=add_category");return;
        $http.post( base_url + "/addProducts.php?action=add_product", 
            {
                'name': $scope.name, 
                'category': $scope.ctgry,
                'subcategory': $scope.subcategory,
                'price': $scope.price
            }

            ).success(function (data, status, headers, config) {
                console.log($scope.ctgry);return;
                console.log('product added ', data);
            });
        }

    getCategories();
    getSubCategories();
    //addcategories();

}]);