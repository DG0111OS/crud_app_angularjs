<div class="col-12 grid-margin stretch-card">
    <div class="card">
        <div class="card-body">
            <h4 class="card-title">Sửa sản phẩm</h4>
            <p class="card-description">
                Sửa sản phẩm
            </p>

            <form ng-submit="saveEdit()" name="editForm" class="forms-sample" novalidate>
                <div class="form-group">
                    <label for="exampleInputName1">Name Product</label>
                    <input ng-change="changeValue()" type="text"
                           class="form-control"
                           name="name"
                           ng-model="product.name"
                           ng-required="true"
                           ng-minlength="6"
                           placeholder="Tên sản phẩm">
                    <span ng-show="editForm.name.$touched && editForm.name.$invalid"
                          class="error-msg">
                        Nhập tên sản phẩm sai
                    </span>
                </div>
                <div class="form-group">
                    <label for="">Price Product</label>
                    <input type="number"
                           ng-model="product.price"
                           name="price"
                           ng-required="true"
                           ng-minlength="1"
                           class="form-control"
                           required
                           placeholder="Giá sản phẩm">
                    <span ng-show="editForm.price.$touched && editForm.price.$invalid"
                          class="error-msg">
                        Giá sản phẩm sai
                    </span>
                </div>

{{--                <div class="form-group">--}}
{{--                    <label for="">Description Product</label>--}}
{{--                    <input type="text"--}}
{{--                           ng-value="product.description"--}}
{{--                           class="form-control"--}}
{{--                           required--}}
{{--                           placeholder="Chi tiết sản phẩm">--}}
{{--                </div>--}}

                <button ng-disabled="editForm.$invalid" class="btn btn-gradient-primary mr-2">Submit</button>
                <a href="#!product" class="btn btn-light">Cancel</a>
            </form>
        </div>
    </div>
</div>
