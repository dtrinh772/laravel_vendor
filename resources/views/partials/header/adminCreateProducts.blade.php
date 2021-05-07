<style>
    .ui-context-bar.ui-context-bar--is-dirty{
        opacity: 1;
        pointer-events: auto;
    }
</style>
<header class="ui-app-frame__header">
{{--    <a href="#AppFrameMain" class="ui-button ui-app-frame__skip-to-content">Skip to content</a>--}}
    <div class="ui-top-bar">
        <div class="ui-top-bar__branding">
            <a href="/admin">
                <img src="https://vsi-international.com/wp-content/uploads/2016/12/VSII-company-logo-1.png" alt="Vsii" title="VSII">
            </a>
            <div class="icon-view-website">
                <a href="http://127.0.0.1:8000/" target="_blank" rel="noreferrer noopener" title="Xem website của bạn">
                    <i class="fas fa-eye"></i>
                </a>
            </div>
        </div>
    </div>
    <div class="ui-context-bar ui-context-bar--is-dirty">
        <div class="ui-context-bar__contents">
            <p class="ui-context-bar__message">Sản phẩm chưa được lưu</p>
            <div class="ui-context-bar__actions-group">
                <div>
                    <button class="ui-button ui-context-bar__actions-cancel" type="button" name="button">Hủy</button>
                </div>
                <div>
                    <button class="btn ui-button ui-button--primary js-btn-loadable js-btn-primary ui-context-bar__actions-primary"
                            type="button"
                            name="button"
                            form="create_new_product"
                            disabled="disabled">Lưu</button>
                </div>
            </div>
        </div>
    </div> <!-- text header -->
    <script class="modal_source" id="CancelContextModal" data-modal-context-ref-for="CancelContextModal" data-define="{CancelContextModal: new Bizweb.Modal(this)}" type="text/html">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="ui-modal__header">
                    <div class="ui-modal__header-title">
                        <h2 class="ui-title">Bạn có chỉnh sửa chưa lưu</h2>
                    </div>
                    <div class="ui-modal__header-actions">
                        <div class="ui-modal__close-button">
                            <button class="ui-button ui-button--transparent close-modal" data-dismiss="modal" aria-label="Close modal" type="button" name="button">

                            </button>
                        </div>
                    </div>
                </div>
                <div class="ui-modal__body">
                    <div class="ui-modal__section">
                        <p>Toàn bộ các chỉnh sửa chưa được lưu của bạn sẽ bị hủy bỏ. Bạn có chắc chắc muốn khôi phục dữ liệu từ lần Lưu trước?</p>
                    </div>
                </div>
                <div class="ui-modal__footer">
                    <div class="ui-modal__footer-actions">
                        <div class="ui-modal__secondary-actions">
                            <div class="button-group">
                                <button class="ui-button close-modal" data-dismiss="modal" type="button" name="button">Tiếp tục chỉnh sửa</button>
                            </div>
                        </div>
                        <div class="ui-modal__primary-actions">
                            <div class="button-group button-group--right-aligned">
                                <button class="ui-button ui-button--destructive" data-bind-event-click="Bizweb.Forms.resetChanges()" type="button" name="button">Hủy bỏ</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </script>
</header>
