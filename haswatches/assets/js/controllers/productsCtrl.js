//base url declaration
var base_url = "http://localhost:81/haswatches/haswatches/assets/database";

// app.service('Upload', ['$http',
//     function ($http) {
//         var upload = Upload.upload({
//             url: 'http://localhost:81/haswatches/haswatches/assets/database/upload.php', // upload.php script, node.js route, or servlet url
//             file: image, // single file or an array of files (array is for html5 only)
//             method: 'POST',
//             headers: {
//                 'Authorization': 'xxx'
//             }, // only for html5
//             // to modify the name of the file(s)
//             /*
//   file formData name ('Content-Disposition'), server side request file parameter name could be
//   an array  of names for multiple files (html5). Default is 'file' */

//             /*
//   map of extra form data fields to send along with file. each field will be sent as a form field.
//   The values are converted to json string or jsob blob or nested form depending on 'sendFieldsAs' option. */
//             fields: {
//                     'name': product.name,
//                     'category': product.category,
//                     'subcategory': product.subcategory,
//                     'price': product.price
//                 },
//             /*
//   default is 'json', sends each field as json string plain text content type, 'json-blob' sends object fields
//   as a blob object with content type 'application/json', 'form' sends fields as nested form fields. see #784 */
//             sendFieldsAs: json ,
//              customize how data is added to the formData. See #40#issuecomment-28612000 for sample code. 

//         }).progress(function(evt) {
//             console.log('progress: ' + parseInt(100.0 * evt.loaded / evt.total) + '% file :' + evt.config.file.name);
//         }).success(function(data, status, headers, config) {
//             // file is uploaded successfully
//             console.log('file ' + config.file.name + 'is uploaded successfully. Response: ' + data);
//         }).error(function(data, status, headers, config) {
//             // handle error
//         }).xhr(function(xhr) {
//             //access or attach event listeners to the underlying XMLHttpRequest
//             xhr.upload.addEventListener()
//         });
//         /* return $http promise then,catch or finally.
// Note that this promise does NOT have progress, abort or xhr functions */
//         var promise = upload.then(success, error, progress);
//         upload.catch(errorCallback);
//         upload.finally(callback, notifyCallback);

//         /* cancel/abort the upload in progress. */
//         upload.abort();

//         /* alternative way of uploading, send the file binary with the file's content-type.
//    Could be used to upload files to CouchDB, imgur, etc... html5 FileReader is needed.
//    It could also be used to enable progress for regualr angular $http() post/put requests.
// */
//         Upload.http({
//             url: '/server/upload/url',
//             headers: {
//                 'Content-Type': file.type
//             },
//             data: file
//         })

//     }
// ]);

app.controller('product', ['$scope', 'FileUploader', '$http',
    function ($scope, FileUploader, $http) {

        category = [];
        subcategory = [];
        products = [];
        $scope.categories = [];
        $scope.subcategories = [];
        $scope.products = [];

        //fetch designer categories with a promise
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
        //return;
    }
]);

