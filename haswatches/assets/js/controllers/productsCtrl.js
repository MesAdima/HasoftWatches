//base url declaration
var url = "http://localhost:81/haswatches/haswatches/assets/database";

app.controller('product', ['$scope', 'FileUploader', '$http',
    function ($scope, FileUploader, $http) {

        category = [];
        subcategory = [];
        products = [];
        designers = [];
        $scope.categories = [];
        $scope.subcategories = [];
        $scope.products = [];
        $scope.designers = [];

        //fetch categories with a promise
        function getCategories() {
            $http.get(url + "/getCategories.php")
                .success(function(category) {
                    $scope.categories = category;
                    console.log(category);
                });
        };

        //fetch subcategories with a promise
        function getSubCategories() {
            $http.get(url + "/getSubCategories.php")
                .success(function(subcategory) {
                    $scope.subcategories = subcategory;
                    console.log($scope.subcategories);
                });
        };

        //fetch designers with a promise
        function getDesigners() {
            $http.get(url + "/getDesigners.php")
                .success(function(designer) {
                    $scope.designers = designer;
                    console.log(designer);
                });
        };

        //fetch products with a promise
        function getProducts() {
            $http.get(url + "/getProducts.php")
                .success(function(product) {
                    $scope.products = product;
                    console.log($scope.products);
                });
        };

        //post a category
        $scope.addcategories = function() {
            // alert(base_url + "/addCategories.php?action=add_category");return;
            $http.post(url + "/addCategories.php?action=add_category", {
                'category_name': $scope.categoryname,
                'description': $scope.descrp
            }).success(function(data, status, headers, config) {
                
                console.log('category added ', data);
                alert('Category saved');
            });
        }

        //post a designer
        $scope.addesigner = function() {
            // alert(base_url + "/addCategories.php?action=add_category");return;
            $http.post(url + "/addDesigner.php?action=add_designer", {
                'name': $scope.designername
            }).success(function(data, status, headers, config) {
                
                console.log('designer added ', data);
                //alert('Designer saved');
            });
        }


            
        getCategories();
        getSubCategories();
        getProducts();
        getDesigners();
        //return;
    }
]);

