<div class="content-wrapper">
    <div class="page-header">
        <h3 class="page-title">
              <span class="page-title-icon bg-gradient-primary text-white mr-2">
                <i class="mdi mdi-home"></i>
              </span>
            Dashboard
        </h3>
        <nav aria-label="breadcrumb">
            <ul class="breadcrumb">
                <li class="breadcrumb-item active" aria-current="page">
                    <span></span>Overview
                    <i class="mdi mdi-alert-circle-outline icon-sm text-primary align-middle"></i>
                </li>
            </ul>
        </nav>
    </div>

    <div class="row">
        <div class="col-md grid-margin stretch-card">
            <div class="card">

                <div class="card-body">
                    <input type="text" class="input-group" style="max-width: 200px" placeholder="Tìm kiếm" ng-model="search">
                    <br>
                    <h4 class="card-title">Danh sách sản phẩm</h4>
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                            <tr>
                                <th>Name</th>
                                <th>Image</th>
                                <th>Price</th>
                            </tr>
                            </thead>
                            <tbody>
                                <tr ng-repeat="value in product | filter : search">
                                    <th>@{{ value.name | uppercase }}</th>
{{--                                    Sử dụng filters--}}
{{--                                    currency : Format a number to a currency format.--}}
{{--                                    date : Format a date to a specified format.--}}
{{--                                    filter : Select a subset of items from an array.--}}
{{--                                    json : Format an object to a JSON string.--}}
{{--                                    limitTo : Limits an array/string, into a specified number of elements/characters.--}}
{{--                                    lowercase : Format a string to lower case.--}}
{{--                                    number : Format a number to a string.--}}
{{--                                    orderBy : Orders an array by an expression.--}}
{{--                                    uppercase : Format a string to upper case.--}}

                                    <th><img ng-src="@{{value.image}}" alt=""></th>
                                    <th>@{{ value.price }}</th>
                                    <th>
                                        <a class="btn btn-warning" href="#!product/@{{ value.id }}/edit">Edit</a>
                                        <button ng-click="xoaSanPham(value.id)" class="btn btn-danger" href="">Delete</button>
                                    </th>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
