<header class="ui-app-frame__header">
    <!-- <a href="#AppFrameMain" class="ui-button ui-app-frame__skip-to-content">Skip to content</a> -->
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
        <div class="ui-top-bar__list">
            <div class="ui-top-bar__item ui-top-bar__item--desktop-hidden ui-top-bar-open-sidebar">
                <div class="ui-app-frame__aside-opener">
                    <button name="button" type="button" class="top-bar-button" aria-controls="AppFrameAside">
                        <i class="fas fa-align-justify"></i>
                    </button>
                </div>
            </div>
            <div class="ui-top-bar__item ui-top-bar__item--fill">
                <section class="top-bar-search">
                    <div class="top-bar-search__input-wrapper">
                        <div class="next-input-wrapper next-navigation-search">
                            <label class="next-label helper--visually-hidden" for="primary-nav-search-input">Kết quả tìm kiếm sẽ hiển thị ở dưới khi bạn nhập từ khóa.</label>
                            <div class="next-input--stylized">
                                            <span class="span next-input__add-on next-input__add-on--before">
                                                <i class="fas fa-search"></i>
                                            </span>

                                <input type="search" name="primary-nav-search-input" id="primary-nav-search-input" placeholder="Nhập từ khóa tìm kiếm..." class="next-input next-input--search next-input--invisible">
                            </div>
                        </div>
                    </div>
                </section>
            </div>
            <div class="ui-top-bar__item">
                <section class="notification-topbar">
                    <div class="notification-area">
                        <button class="notification-button" data-toggle="dropdown">
                            <div class="notification-icon" id="numOfUnreadNoti">
                                <i class="far fa-bell"></i>
                            </div>
                        </button>
                        <ul class="dropdown-menu arrow-style dropdown-notifications"><li class="dropdown-title">Thông báo </li><li style="line-height: 50px; text-align: center;">Bạn chưa có thông báo mới</li><li class="dropdown-footer"><a href="/admin/adminnotifications">Xem tất cả thông báo</a></li></ul>
                    </div>
                </section>
            </div>
            <div class="ui-top-bar__item ui-top-bar__item--separated ui-top-bar__item--bleed ui-top-bar__item--mobile-hidden ui-top-bar-acc">

                <div class="ui-popover__container ui-popover__container--full-width-container">
                    <button name="button" type="button" class="top-bar-button top-bar-button--profile" id="AccountMenuActivator">
                        <div class="top-bar-profile">

                                <div class="top-bar-profile__avatar">

                             <span class="user-avatar user-avatar--style-2">
                                   <span class="user-avatar__initials">
                                       <img class="profile-pic img-circle" data-name="{{Auth::user()->name}}"
                                            src="data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHBvaW50ZXItZXZlbnRzPSJub25lIiB3aWR0aD0iNDYiIGhlaWdodD0iNDYiIHN0eWxlPSJiYWNrZ3JvdW5kLWNvbG9yOiByZ2IoNTIsIDczLCA5NCk7IHdpZHRoOiA0NnB4OyBoZWlnaHQ6IDQ2cHg7IGJvcmRlci1yYWRpdXM6IDBweDsiPjx0ZXh0IHRleHQtYW5jaG9yPSJtaWRkbGUiIHk9IjUwJSIgeD0iNTAlIiBkeT0iMC4zNWVtIiBwb2ludGVyLWV2ZW50cz0iYXV0byIgZmlsbD0iI2ZmZmZmZiIgZm9udC1mYW1pbHk9IkhlbHZldGljYU5ldWUtTGlnaHQsSGVsdmV0aWNhIE5ldWUgTGlnaHQsSGVsdmV0aWNhIE5ldWUsSGVsdmV0aWNhLCBBcmlhbCxMdWNpZGEgR3JhbmRlLCBzYW5zLXNlcmlmIiBzdHlsZT0iZm9udC13ZWlnaHQ6IDQwMDsgZm9udC1zaXplOiAyMHB4OyI+QzwvdGV4dD48L3N2Zz4=">
                                    </span>
                             </span>

                                </div>
                                <div class="top-bar-profile__summary">
                                    <p class="top-bar-profile__title">
                                        {{Auth::user()->name}}
                                    </p>
                                    <p class="top-bar-profile__description">
                                      <span>
                                         <span class="text-aqua bold">HandSome</span>
                                      </span>
                                    </p>
                                </div>

                        </div>
                    </button>
                    <div class="ui-popover margin-10 ui-popover--is-positioned-beneath" role="dialog" style=" max-width: none; margin-right: 0px; margin-left: 0px; transform-origin: 91px -5px; left: 26px;">
                        <div class="ui-popover__tooltip"></div><div class="ui-popover__content-wrapper">
                            <div class="ui-popover__content" style=" max-height: 164px; width: 182px;">
                                <div class="ui-popover__pane">
                                    <ul class="ui-action-list">
                                        <li class="ui-action-list__item">
                                            <a href="/admin/settings/account/425201" class="ui-action-list-action" data-allow-default="1">
                                               <span class="ui-action-list-action__text">
                                                   <div class="ui-stack ui-stack--wrap ui-stack--alignment-center ui-stack--spacing-tight">
                                                       <div class="ui-stack-item">
                                                           <i class="fas fa-user-tie"></i>
                                                       </div>
                                                       <div class="ui-stack-item ui-stack-item--fill">
                                                           <span>Tài khoản của bạn</span>
                                                       </div>
                                                    </div>
                                               </span>
                                            </a>
                                        </li>
                                        <li class="ui-action-list__item">
                                            <a href="/admin/authorization/logout" class="ui-action-list-action" data-no-turbolink="true" data-method="post">
                                                <span class="ui-action-list-action__text">
                                                     <div class="ui-stack ui-stack--wrap ui-stack--alignment-center ui-stack--spacing-tight">
                                                         <div class="ui-stack-item">
                                                            <i class="fas fa-sign-out-alt"></i>
                                                         </div>
                                                         <div class="ui-stack-item ui-stack-item--fill">
                                                             <span>Đăng xuất</span>
                                                         </div>
                                                     </div>
                                                </span>
                                            </a>
                                        </li>
                                    </ul>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="ui-top-bar__item hidden-sm hidden-xs" style="border-left: 1px solid #dfdfdf;padding:0.4rem 0;">
                <div class="ui-popover__container">
                    <a class="top-bar-button" id="ui-popover-activator--2" aria-expanded="false" aria-haspopup="false" aria-owns="ui-popover--2" aria-controls="ui-popover--2" style="flex-wrap: wrap;padding: 0.8rem 0;text-decoration:none;">
                        <img src="//bizweb.dktcdn.net/assets/admin/images/hotro1a.png">
                        <p style="width:100%;text-align:center">Trợ giúp</p>
                    </a>
                    <div class="ui-popover ui-popover--align-edge ui-popover--is-positioned-beneath" data-popover-css-vertical-margin="13" data-popover-css-horizontal-margin="16" data-popover-css-max-height="300" data-popover-css-max-width="550" id="ui-popover--2" aria-labelledby="ui-popover-activator--2" aria-expanded="false" role="dialog" style="max-width: none; margin-right: 0px; margin-left: 0px; transform-origin: 63px -5px 0px; left: 0px; opacity: 1; overflow: visible;">
                        <div class="ui-popover__tooltip" style="left: 63px;"></div>
                        <div class="ui-popover__content-wrapper" style="max-height:417px">
                            <div class="ui-popover__content ui-popover__mix" style="width: 400px;">
                                <div class="">

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</header>


