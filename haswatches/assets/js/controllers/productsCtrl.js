//base url declaration
var base_url = "http://localhost:81/haswatches/haswatches/assets/database";

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
            $http.get(base_url + "/getCategories.php")
                .success(function(category) {
                    $scope.categories = category;
                    console.log(category);
                });
        };

        //fetch subcategories with a promise
        function getSubCategories() {
            $http.get(base_url + "/getSubCategories.php")
                .success(function(subcategory) {
                    $scope.subcategories = subcategory;
                    console.log($scope.subcategories);
                });
        };

        //fetch designers with a promise
        function getDesigners() {
            $http.get(base_url + "/getDesigners.php")
                .success(function(designer) {
                    $scope.designers = designer;
                    console.log(designer);
                });
        };

        //fetch products with a promise
        function getProducts() {
            $http.get(base_url + "/getProducts.php")
                .success(function(product) {
                    $scope.products = product;
                    console.log($scope.products);
                });
        };

        //post a category
        $scope.addcategories = function() {
            // alert(base_url + "/addCategories.php?action=add_category");return;
            $http.post(base_url + "/addCategories.php?action=add_category", {
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
            $http.post(base_url + "/addDesigner.php?action=add_designer", {
                'name': $scope.designername
            }).success(function(data, status, headers, config) {
                
                console.log('designer added ', data);
                //alert('Designer saved');
            });
        }


        //the save method
        $scope.addproduct = function (product, file) {
            $scope.uploader = new FileUploader({
    url: $scope.uploadUrl,
    removeAfterUpload: true,
    onBeforeUploadItem: function (item) {
        var stuff = {
            'name': product.name,
                    'category': product.category,
                    'subcategory': product.subcategory,
                    'price': product.price
        }
        item.formData.push(stuff);
    },
    onSuccessItem: function (item, response, status, headers) {

    },
    queueLimit: 1,
});
            

        //     $scope.message = "";
        //     FileUploader({
        //         url: 'http://localhost:81/haswatches/haswatches/assets/database/upload.php',
        //         method: 'POST',
        //         file: file,
        //         sendFieldsAs: 'form',
        //         fields: {
        //             'name': product.name,
        //             'category': product.category,
        //             'subcategory': product.subcategory,
        //             'price': product.price
        //         }
        //     }).success(function (formData, status, headers, config) {
        //     $scope.message = formData;                
        // }).error(function (formData, status) {
        //     $scope.message = formData;
        // });
    }
        getCategories();
        getSubCategories();
        getProducts();
        getDesigners();
        //return;
    }
]);

