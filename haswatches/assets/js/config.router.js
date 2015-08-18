'use strict';

/**
 * Config for the router
 */
app.config(['$stateProvider', '$urlRouterProvider', '$controllerProvider', '$compileProvider', '$filterProvider', '$provide', '$ocLazyLoadProvider', 'JS_REQUIRES',
function ($stateProvider, $urlRouterProvider, $controllerProvider, $compileProvider, $filterProvider, $provide, $ocLazyLoadProvider, jsRequires) {

    app.controller = $controllerProvider.register;
    app.directive = $compileProvider.directive;
    app.filter = $filterProvider.register;
    app.factory = $provide.factory;
    app.service = $provide.service;
    app.constant = $provide.constant;
    app.value = $provide.value;

    // LAZY MODULES

    $ocLazyLoadProvider.config({
        debug: false,
        events: true,
        modules: jsRequires.modules
    });

    // APPLICATION ROUTES
    // -----------------------------------
    // For any unmatched url, redirect to /app/dashboard
    $urlRouterProvider.otherwise("/app/dashboard");
    //
    // Set up the states
    $stateProvider.state('app', {
        url: "/app",
        templateUrl: "assets/views/app.html",
        resolve: loadSequence('modernizr', 'moment', 'angularMoment', 'uiSwitch', 'perfect-scrollbar-plugin', 'toaster', 'ngAside', 'vAccordion', 'sweet-alert', 'chartjs', 'tc.chartjs', 'oitozero.ngSweetAlert', 'chatCtrl'),
        abstract: true
    }).state('app.dashboard', {
        url: "/dashboard",
        templateUrl: "assets/views/dashboard.html",
        resolve: loadSequence('jquery-sparkline', 'dashboardCtrl'),
        title: 'Dashboard',
        ncyBreadcrumb: {
            label: 'Dashboard'
        }
    })

    //admin profile and messages
    .state('app.pages', {
        url: '/pages',
        template: '<div ui-view class="fade-in-up"></div>',
        title: 'Pages',
        ncyBreadcrumb: {
            label: 'Pages'
        }
    }).state('app.pages.user', {
        url: '/user',
        templateUrl: "assets/views/pages_user_profile.html",
        title: 'User Profile',
        ncyBreadcrumb: {
            label: 'User Profile'
        },
        resolve: loadSequence('flow', 'userCtrl')
    }).state('app.pages.messages', {
        url: '/messages',
        templateUrl: "assets/views/pages_messages.html",
        resolve: loadSequence('truncate', 'htmlToPlaintext', 'inboxCtrl')
    }).state('app.pages.messages.inbox', {
        url: '/inbox/:inboxID',
        templateUrl: "assets/views/pages_inbox.html",
        controller: 'ViewMessageCrtl'
    }).state('app.utilities', {
        url: '/utilities',
        template: '<div ui-view class="fade-in-up"></div>',
        title: 'Utilities',
        ncyBreadcrumb: {
            label: 'Utilities'
        }
    })
    
    //products
    .state('app.products', {
        url: '/products',
        template: '<div ui-view class="fade-in-up"></div>',
        title: 'Products',
        ncyBreadcrumb: {
            label: 'Products'
        }
    }).state('app.products.viewproducts', {
        url: '/viewproducts',
        templateUrl: "assets/views/products/viewproducts.html",
        title: 'View the products',
        ncyBreadcrumb: {
            label: 'View Products'
        },
        resolve: loadSequence('ngTable')
    }).state('app.products.addproduct', {
        url: '/addproduct',
        templateUrl: "assets/views/products/addproduct.html",
        title: 'New Product',
        ncyBreadcrumb: {
            label: 'New Product'
        },
        resolve: loadSequence('ngTable', 'ui.select','angularBootstrapNavTree', 'treeCtrl', 'productsCtrl', 'angularFileUpload', 'uploadCtrl')
    })

    //categories
    .state('app.categories', {
        url: '/categories',
        template: '<div ui-view class="fade-in-up"></div>',
        title: 'Categories',
        ncyBreadcrumb: {
            label: 'Categories'
        }
    }).state('app.categories.addcategory', {
        url: '/addcategory',
        templateUrl: "assets/views/categories/addcategory.html",
        title: 'New Category',
        ncyBreadcrumb: {
            label: 'New Category'
        },
        resolve: loadSequence('ngTable', 'ui.select','angularBootstrapNavTree', 'treeCtrl', 'productsCtrl', 'uploadCtrl')
    })

    //orders
    .state('app.orders', {
        url: '/orders',
        template: '<div ui-view class="fade-in-up"></div>',
        title: 'Orders',
        ncyBreadcrumb: {
            label: 'Orders'
        }
    }).state('app.orders.vieworders', {
        url: '/vieworders',
        templateUrl: "assets/views/orders/vieworders.html",
        title: 'New Order',
        ncyBreadcrumb: {
            label: 'New Order'
        },
        resolve: loadSequence('ngTable', 'ui.select','angularBootstrapNavTree', 'treeCtrl', 'productsCtrl', 'uploadCtrl')
    })

    //users
    .state('app.users', {
        url: '/users',
        template: '<div ui-view class="fade-in-up"></div>',
        title: 'Users',
        ncyBreadcrumb: {
            label: 'Users'
        }
    }).state('app.users.viewusers', {
        url: '/viewusers',
        templateUrl: "assets/views/users/viewusers.html",
        title: 'View Users',
        ncyBreadcrumb: {
            label: 'View Users'
        },
        resolve: loadSequence('ngTable')
    }).state('app.users.adduser', {
        url: '/adduser',
        templateUrl: "assets/views/users/adduser.html",
        title: 'New User',
        ncyBreadcrumb: {
            label: 'New User'
        },
        resolve: loadSequence('ngTable', 'ui.select','angularBootstrapNavTree', 'treeCtrl', 'productsCtrl', 'uploadCtrl')
    })

    //error routes
    .state('error', {
        url: '/error',
        template: '<div ui-view class="fade-in-up"></div>'
    }).state('error.404', {
        url: '/404',
        templateUrl: "assets/views/utility_404.html",
    }).state('error.500', {
        url: '/500',
        templateUrl: "assets/views/utility_500.html",
    })

	// Login routes

	.state('login', {
	    url: '/login',
	    template: '<div ui-view class="fade-in-right-big smooth"></div>',
	    abstract: true
	}).state('login.signin', {
	    url: '/signin',
	    templateUrl: "assets/views/login_login.html"
	}).state('login.forgot', {
	    url: '/forgot',
	    templateUrl: "assets/views/login_forgot.html"
	}).state('login.registration', {
	    url: '/registration',
	    templateUrl: "assets/views/login_registration.html"
	}).state('login.lockscreen', {
	    url: '/lock',
	    templateUrl: "assets/views/login_lock_screen.html"
	});

    // Generates a resolve object previously configured in constant.JS_REQUIRES (config.constant.js)
    function loadSequence() {
        var _args = arguments;
        return {
            deps: ['$ocLazyLoad', '$q',
			function ($ocLL, $q) {
			    var promise = $q.when(1);
			    for (var i = 0, len = _args.length; i < len; i++) {
			        promise = promiseThen(_args[i]);
			    }
			    return promise;

			    function promiseThen(_arg) {
			        if (typeof _arg == 'function')
			            return promise.then(_arg);
			        else
			            return promise.then(function () {
			                var nowLoad = requiredData(_arg);
			                if (!nowLoad)
			                    return $.error('Route resolve: Bad resource name [' + _arg + ']');
			                return $ocLL.load(nowLoad);
			            });
			    }

			    function requiredData(name) {
			        if (jsRequires.modules)
			            for (var m in jsRequires.modules)
			                if (jsRequires.modules[m].name && jsRequires.modules[m].name === name)
			                    return jsRequires.modules[m];
			        return jsRequires.scripts && jsRequires.scripts[name];
			    }
			}]
        };
    }
}]);