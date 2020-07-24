let app = angular.module("myApp", ["ngRoute"]);

app.config(function ($routeProvider) {
    $routeProvider
        .when("/", {
            template: "<h1>Dashboard</h1> "
        })
        .when("/product", {
            templateUrl: "product", // trọc router của thằng laravel ahihi
            controller: 'hienThiDanhSachSanPham',
        })
        .when("/product/:id/edit", {
            templateUrl: "product/:id/edit",
            controller: 'suaSanPham'
        })
        .when("/product/create", {
            templateUrl: "product/create",
            controller: 'themSanPham'
        })
        .otherwise({
            redirectTo: '/'
        });
});
// hien thị danh sách sản phẩm
app.controller('hienThiDanhSachSanPham', function ($scope, $http, $location) {
    $scope.layDuLieuSanPham = () => {
        $http.get("/api/product")
            .then(function ({data}) {
                $scope.product = data;
            });
    }

    $scope.layDuLieuSanPham();

    $scope.xoaSanPham = (id) => {
        $http.delete(`/api/product/${id}`)
            .then(() => {
                $scope.layDuLieuSanPham();
            });
    }
})

app.controller('suaSanPham', function ($scope, $routeParams, $http, $location) {
    $http.get(`/api/product/${$routeParams.id}/edit`)
        .then(function ({data}) {
            $scope.product = {
                name: data.name,
                price: data.price
            }
        });

    $scope.saveEdit = () => {
        swal({
            title: "Bạn có chắc chắn?",
            text: "Muốn sửa sản phẩm này không ?!",
            icon: "warning",
            buttons: true,
            dangerMode: true,
        })
            .then((willDelete) => {
                if (willDelete) {
                    $http({
                        method: 'PUT',
                        url: `api/product/${$routeParams.id}`,
                        data: $scope.product,
                    }).then(({data}) => {
                        $location.path('product'); // nhớ nhé cái location này
                    })
                } else {
                    swal("Thay đổi sản phẩm không thành công!");
                }
            });
    }
})


app.controller('themSanPham', ($scope) => {
    $scope.saveAdd = () => {
        console.log(editForm.$invalid);
    }
})
