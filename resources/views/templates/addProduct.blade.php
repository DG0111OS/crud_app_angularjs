<div class="col-12 grid-margin stretch-card">
    <div class="card">
        <div class="card-body">
            <h4 class="card-title">Thêm sản phẩm</h4>
            <p class="card-description">
                Thêm sản phẩm
            </p>
            <form ng-submit="saveAdd()" name="editForm" class="forms-sample" novalidate>
                <div class="form-group">
                    <label for="exampleInputName1">Name Product</label>
                    <input type="text"
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
                    <label for="exampleInputName1">Price Product</label>
                    <input type="number"
                           class="form-control"
                           name="price"
                           ng-model="product.price"
                           ng-required="true"
                           placeholder="Giá sản phẩm">
                    <span ng-show="editForm.price.$touched && editForm.price.$invalid"
                          class="error-msg">
                        Nhập sai giá sản phẩm
                    </span>
                </div>

                <div class="form-group">
                    <label for="exampleInputName1">Image Product</label>
                    <input type="text"
                           class="form-control"
                           name="image"
                           ng-model="product.image"
                           ng-required="true"
                           placeholder="Url hình ảnh">
                    <span ng-show="editForm.image.$touched && editForm.image.$invalid"
                          class="error-msg">
                        Nhập sai đường dẫn hình ảnh sản phẩm
                    </span>
                </div>

                <div class="form-group">
                    <label for="exampleInputName1">Description Product</label>
                    <input type="text"
                           class="form-control"
                           name="description"
                           ng-model="product.description"
                           ng-required="true"
                           placeholder="Mô tả sản phẩm">
                    <span ng-show="editForm.description.$touched && editForm.description.$invalid"
                          class="error-msg">
                        Nhập sai mô tả sản phẩm
                    </span>
                </div>

                <div class="form-group">
                    <label for="exampleInputName1">Promotion price Product</label>
                    <input type="number"
                           class="form-control"
                           name="promotion_price"
                           ng-model="product.promotion_price"
                           ng-required="true"
                           placeholder="Mô tả sản phẩm">
                    <span ng-show="editForm.promotion_price.$touched && editForm.promotion_price.$invalid"
                          class="error-msg">
                        Nhập sai giảm giá sản phẩm
                    </span>
                </div>

                <div class="form-group">
                    <label for="exampleInputName1">Quantity Product</label>
                    <input type="number"
                           class="form-control"
                           name="quantity"
                           ng-model="product.quantity"
                           ng-required="true"
                           placeholder="Mô tả sản phẩm">
                    <span ng-show="editForm.quantity.$touched && editForm.quantity.$invalid"
                          class="error-msg">
                        Nhập sai số lượng sản phẩm
                    </span>
                </div>

                <button ng-disabled="editForm.$invalid" class="btn btn-gradient-primary mr-2">Thêm sản phẩm</button>
                <button class="btn btn-light">Cancel</button>
            </form>
        </div>
    </div>
</div>
