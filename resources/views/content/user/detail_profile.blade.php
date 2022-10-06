<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from silicon.createx.studio/account-details.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 17 Sep 2022 03:51:15 GMT -->
<!-- Added by HTTrack -->
<meta http-equiv="content-type" content="text/html;charset=utf-8" /><!-- /Added by HTTrack -->

<head>
    @include('includes.user.head')

    <style>
        .custom-file-input::-webkit-file-upload-button {
            visibility: hidden;
        }

        .custom-file-input::before {
            content: 'Select some files';
            display: inline-block;
            background: linear-gradient(top, #f9f9f9, #e3e3e3);
            border: 1px solid #999;
            border-radius: 3px;
            padding: 5px 8px;
            outline: none;
            white-space: nowrap;
            -webkit-user-select: none;
            cursor: pointer;
            text-shadow: 1px 1px #fff;
            font-weight: 700;
            font-size: 10pt;
        }

        .custom-file-input:hover::before {
            border-color: black;
        }

        .custom-file-input:active::before {
            background: -webkit-linear-gradient(top, #e3e3e3, #f9f9f9);
        }
    </style>
</head>


<!-- Body -->

<body>

    <header class="header navbar navbar-expand-lg bg-light border-bottom border-light shadow-sm fixed-top">
        @include('includes.user.navbar')
    </header>


    <!-- Page content -->
    <section class="container pt-5">
        <div class="row">


            <!-- Sidebar (User info + Account menu) -->
            <aside class="col-lg-3 col-md-4 border-end pb-5 mt-n5">
                <div class="position-sticky top-0">
                    <div class="text-center pt-5">
                        <div class="d-table position-relative mx-auto mt-2 mt-lg-4 pt-5 mb-3">
                            <img src="{{ asset('user/img/avatar/18.jpg') }}" class="d-block rounded-circle" width="120"
                                alt="John Doe">
                        </div>
                        <h2 class="h5 mb-1">John Doe</h2>
                        <p class="mb-3 pb-3">jonny@email.com</p>
                        <button class="btn btn-outline-secondary mb-3" data-bs-toggle="modal"
                            data-bs-target="#modalEdit" data type="button">
                            <i class="bx bx-pencil fs-lg me-2"></i>
                            Edit Profile
                        </button>
                        <button class="btn btn-outline-secondary mb-3" type="button">
                            <i class="bx bx-plus fs-lg me-2"></i>
                            Lengkapi Profile
                        </button>
                        <a href="/post_postingan"><button class="btn btn-outline-secondary mb-3" type="button">
                            <i class="bx bx-plus fs-lg me-2"></i>
                            Post Foto
                        </button></a>
                        {{-- <!-- Default modal -->
                        <div class="modal fade" id="modalEdit" tabindex="-1" role="dialog">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    ...
                                </div>
                            </div>
                        </div> --}}
                        <button type="button" class="btn btn-secondary w-100 d-md-none mt-n2 mb-3"
                            data-bs-toggle="collapse" data-bs-target="#account-menu">
                            <i class="bx bxs-user-detail fs-xl me-2"></i>
                            Account menu
                            <i class="bx bx-chevron-down fs-lg ms-1"></i>
                        </button>

                    </div>
                </div>
            </aside>

            <!-- Account details -->
            <div class="col-md-8 offset-lg-1 pb-5 mb-2 mb-lg-4 pt-md-5 mt-n3 mt-md-0">
                <div class="ps-md-3 ps-lg-0 mt-md-2 py-md-4">
                    <h1 class="h2 pt-xl-1 pb-3">Profil Saya</h1>

                    <!-- Basic info -->
                    <h2 class="h5 text-primary mb-4">Basic info</h2>
                    <form class="needs-validation border-bottom pb-3 pb-lg-4" novalidate>
                        <div class="row pb-2">
                            <div class="col-sm-6 mb-4">
                                <label for="fn" class="form-label fs-base">First name</label>
                                <input type="text" id="fn" class="form-control form-control-lg" value="John" required>
                                <div class="invalid-feedback">Please enter your first name!</div>
                            </div>
                            <div class="col-sm-6 mb-4">
                                <label for="sn" class="form-label fs-base">Second name</label>
                                <input type="text" id="sn" class="form-control form-control-lg" value="Doe" required>
                                <div class="invalid-feedback">Please enter your second name!</div>
                            </div>
                            <div class="col-sm-6 mb-4">
                                <label for="email" class="form-label fs-base">Email address</label>
                                <input type="email" id="email" class="form-control form-control-lg"
                                    value="jonny@email.com" required>
                                <div class="invalid-feedback">Please provide a valid email address!</div>
                            </div>
                            <div class="col-sm-6 mb-4">
                                <label for="phone" class="form-label fs-base">Phone <small
                                        class="text-muted">(optional)</small></label>
                                <input type="text" id="phone" class="form-control form-control-lg"
                                    data-format='{"numericOnly": true, "delimiters": ["+1 ", " ", " "], "blocks": [0, 3, 3, 2]}'
                                    placeholder="+1 ___ ___ __">
                            </div>
                            <div class="col-12 mb-4">
                                <label for="bio" class="form-label fs-base">Bio <small
                                        class="text-muted">(optional)</small></label>
                                <textarea id="bio" class="form-control form-control-lg" rows="4"
                                    placeholder="Add a short bio..."></textarea>
                            </div>
                        </div>
                        <div class="d-flex mb-3">
                            <button type="reset" class="btn btn-secondary me-3">Cancel</button>
                            <button type="submit" class="btn btn-primary">Save changes</button>
                        </div>
                    </form>

                    <!-- Address -->
                    <h2 class="h5 text-primary pt-1 pt-lg-3 my-4">Address</h2>
                    <form class="needs-validation border-bottom pb-2 pb-lg-4" novalidate>
                        <div class="row pb-2">
                            <div class="col-sm-6 mb-4">
                                <label for="country" class="form-label fs-base">Country</label>
                                <select id="country" class="form-select form-select-lg" required>
                                    <option value="" disabled>Choose country</option>
                                    <option value="Australia">Australia</option>
                                    <option value="Belgium">Belgium</option>
                                    <option value="Canada">Canada</option>
                                    <option value="Denmark">Denmark</option>
                                    <option value="USA" selected>USA</option>
                                </select>
                                <div class="invalid-feedback">Please choose your country!</div>
                            </div>
                            <div class="col-sm-6 mb-4">
                                <label for="state" class="form-label fs-base">State</label>
                                <select id="state" class="form-select form-select-lg" required>
                                    <option value="" disabled>Choose state</option>
                                    <option value="Arizona">Arizona</option>
                                    <option value="California">California</option>
                                    <option value="Iowa">Iowa</option>
                                    <option value="Florida" selected>Florida</option>
                                    <option value="Michigan">Michigan</option>
                                    <option value="Texas">Texas</option>
                                </select>
                                <div class="invalid-feedback">Please choose your state!</div>
                            </div>
                            <div class="col-sm-6 mb-4">
                                <label for="city" class="form-label fs-base">City</label>
                                <select id="city" class="form-select form-select-lg" required>
                                    <option value="" disabled>Choose city</option>
                                    <option value="Boston">Boston</option>
                                    <option value="Chicago">Chicago</option>
                                    <option value="Los Angeles">Los Angeles</option>
                                    <option value="Miami" selected>Miami</option>
                                    <option value="New York">New York</option>
                                    <option value="Philadelphia">Philadelphia</option>
                                </select>
                                <div class="invalid-feedback">Please choose your city!</div>
                            </div>
                            <div class="col-sm-6 mb-4">
                                <label for="zip" class="form-label fs-base">ZIP code</label>
                                <input type="text" id="zip" class="form-control form-control-lg" required>
                                <div class="invalid-feedback">Please enter your ZIP code!</div>
                            </div>
                            <div class="col-12 mb-4">
                                <label for="address1" class="form-label fs-base">Address line 1</label>
                                <input id="address1" class="form-control form-control-lg" required>
                            </div>
                            <div class="col-12 mb-4">
                                <label for="address2" class="form-label fs-base">Address line 2 <small
                                        class="text-muted">(optional)</small></label>
                                <input id="address2" class="form-control form-control-lg">
                            </div>
                        </div>
                        <div class="d-flex mb-3">
                            <button type="reset" class="btn btn-secondary me-3">Cancel</button>
                            <button type="submit" class="btn btn-primary">Save changes</button>
                        </div>
                    </form>

                    <!-- Delete account -->
                    <h2 class="h5 text-primary pt-1 pt-lg-3 mt-4">Delete account</h2>
                    <p>When you delete your account, your public profile will be deactivated immediately. If you change
                        your mind before the 14 days are up, sign in with your email and password, and we’ll send you a
                        link to reactivate your account.</p>
                    <div class="form-check mb-4">
                        <input type="checkbox" id="delete-account" class="form-check-input">
                        <label for="delete-account" class="form-check-label fs-base">Yes, I want to delete my
                            account</label>
                    </div>
                    <button type="button" class="btn btn-danger">Delete</button>
                </div>
            </div>
        </div>
    </section>
    </main>


    <!-- Footer -->
    @include('includes.user.footer')


    <!-- Back to top button -->
    <a href="#top" class="btn-scroll-top" data-scroll>
        <span class="btn-scroll-top-tooltip text-muted fs-sm me-2">Top</span>
        <i class="btn-scroll-top-icon bx bx-chevron-up"></i>
    </a>


    <!-- Vendor Scripts -->
    @include('includes.user.script')
</body>

<!-- Mirrored from silicon.createx.studio/account-details.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 17 Sep 2022 03:51:16 GMT -->

</html>