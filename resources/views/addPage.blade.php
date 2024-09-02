<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from cartzilla.createx.studio/nft-account-settings.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 12 Aug 2022 18:19:25 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=utf-8" /><!-- /Added by HTTrack -->
<head>
    <meta charset="utf-8">
    <title>{{$settings->website_name}} </title>
    <!-- SEO Meta Tags-->
    <meta name="description" content="Cartzilla - Bootstrap E-commerce Template">
    <meta name="keywords" content="bootstrap, shop, e-commerce, market, modern, responsive,  business, mobile, bootstrap, html5, css3, js, gallery, slider, touch, creative, clean">
    <meta name="author" content="Createx Studio">
    <!-- Viewport-->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Favicon and Touch Icons-->
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('storage/' . ($settings->icon))}}">
    <link rel="mask-icon" color="#fe6a6a" href="{{ asset('safari-pinned-tab.svg') }}">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="theme-color" content="#ffffff">
    <!-- Vendor Styles including: Font Icons, Plugins, etc.-->
    <link rel="stylesheet" media="screen" href="{{ asset('vendor/simplebar/dist/simplebar.min.css') }}"/>
    <link rel="stylesheet" media="screen" href="{{ asset('vendor/tiny-slider/dist/tiny-slider.css') }}"/>
    <!-- Main Theme Styles + Bootstrap-->
    <link rel="stylesheet" media="screen" href="{{ asset('css/theme.min.css') }}">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.18/summernote-bs4.min.css" rel="stylesheet">

    <!-- Google Tag Manager-->

    <style>
      i {
        padding: 15 !important;
        float: left !important;
      }
    </style>
  </head>
  <!-- Body-->
  <body class="handheld-toolbar-enabled">
    <!-- Google Tag Manager (noscript)-->
    <noscript>
      <iframe src="http://www.googletagmanager.com/ns.html?id=GTM-WKV3GT5" height="0" width="0" style="display: none; visibility: hidden;"></iframe>
    </noscript>
    <!-- Sign in / sign up modal-->
    @include('Includes.signin_signup')

    <main class="page-wrapper">
      <!-- Navbar for NFT Marketplace demo-->
      <!-- Remove "navbar-sticky" class to make navigation bar scrollable with the page.-->
      @include('Includes.account_header')

      @include('Includes.navBar')

      <div class="container mb-5 pb-3">
        <div class="bg-light shadow-lg rounded-3 overflow-hidden">
          <div class="row">
            <!-- Sidebar-->
            @include('Includes.leftSideMenue')

            <!-- Content-->

            <section class="col-lg-9 pt-lg-4 pb-4 mb-3">
                <div class="pt-2 px-4 ps-lg-0 pe-xl-5">
                    <h1 class="h3 mb-4 pt-2 text-center text-sm-start">Website Settings</h1>

                    <!-- Display success or error messages -->
                    @if (session('success'))
                        <div class="alert alert-success">
                            {{ session('success') }}
                        </div>
                    @endif
                    @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                     @endif

                    <div class="modal fade" id="addPage-modal" tabindex="-1" role="dialog">
                        <div class="modal-dialog modal-dialog-centered" role="document">
                          <div class="modal-content">
                            <div class="modal-header bg-secondary">
                              <ul class="nav nav-tabs card-header-tabs" role="tablist">
                                <li class="nav-item"><a class="nav-link fw-medium active" href="#signin-tab" data-bs-toggle="tab" role="tab" aria-selected="true">Add Product</a></li>
                              </ul>
                              <img src="" alt="">
                              <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body tab-content py-4">
                                <form class="needs-validation tab-pane fade show active" autocomplete="off" novalidate id="product-form" action="{{ route('pages.store') }}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    <!-- Product Name -->

                                    <!-- Product Salary -->
                                    <div class="form-group">
                                      <label for="title">Page Title:</label>
                                      <input type="text" class="form-control" id="title" name="title" placeholder="Enter page title" required>
                                  </div>

                                  <div class="form-group">
                                      <label for="slug">Slug:</label>
                                      <input type="text" class="form-control" id="slug" name="slug" placeholder="Enter slug (e.g., about-us)" required>
                                  </div>

                                  <div class="form-group">
                                    <label for="editor2">Content:</label>
                                    <textarea name="content" id="editor2"></textarea>
                                  </div>

                                  <div class="form-group">
                                      <label for="meta_description">Meta Description:</label>
                                      <textarea class="form-control" id="meta_description" name="meta_description" rows="3" placeholder="Enter meta description for SEO"></textarea>
                                  </div>

                                  <div class="form-group">
                                      <label for="meta_keywords">Meta Keywords:</label>
                                      <input type="text" class="form-control" id="meta_keywords" name="meta_keywords" placeholder="Enter meta keywords (comma-separated)">
                                  </div>

                                  <div class="form-group">
                                      <label for="status">Status:</label>
                                      <select class="form-control" id="status" name="status">
                                          <option value="published">Published</option>
                                          <option value="draft">Draft</option>
                                      </select>
                                  </div>
                                  <div class="form-group">
                                    <label for="add_to">Add To :</label>
                                    <select class="form-control" id="add_to" name="add_to">
                                        <option value="header">Header</option>
                                        <option value="footer">Footer</option>
                                    </select>
                                </div>

                                  <br><br>

                                    <!-- Submit Button -->
                                    <button class="btn btn-primary btn-shadow d-block w-100" type="submit">Add</button>
                                </form>

                            </div>
                          </div>
                        </div>
                    </div>
                    <div class="modal fade" id="updatePage-modal" tabindex="-1" role="dialog">
                      <div class="modal-dialog modal-dialog-centered" role="document">
                        <div class="modal-content">
                          <div class="modal-header bg-secondary">
                            <ul class="nav nav-tabs card-header-tabs" role="tablist">
                              <li class="nav-item"><a class="nav-link fw-medium active" href="#signin-tab" data-bs-toggle="tab" role="tab" aria-selected="true">Update Page</a></li>
                            </ul>
                            <img src="" alt="">
                            <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
                          </div>
                          <div class="modal-body tab-content py-4">
                              <form class="needs-validation tab-pane fade show active" autocomplete="off" novalidate id="update-form" enctype="multipart/form-data">
                                  @csrf
                                  @method('PUT')

                                  <!-- Product Name -->
                                  @if (session('success'))
                                  <p>{{ session('success') }}</p>
                                  @if (session('image'))
                                      <img src="{{ asset('storage/' . session('image')) }}" alt="Uploaded Image">
                                  @endif
                                  @endif

                                  @if (session('error'))
                                      <p>{{ session('error') }}</p>
                                  @endif
                                  <!-- Product Salary -->
                                  <div class="form-group">
                                    <label for="title">Page Title:</label>
                                    <input type="text" class="form-control" id="title" name="title" placeholder="Enter page title" required>
                                </div>

                                <div class="form-group">
                                    <label for="slug">Slug:</label>
                                    <input type="text" class="form-control" id="slug" name="slug" placeholder="Enter slug (e.g., about-us)" required>
                                </div>

                                <div class="form-group">
                                  <label for="editor1">Content:</label>
                                  <textarea name="content" id="editor1"></textarea>
                                </div>

                                <div class="form-group">
                                    <label for="meta_description">Meta Description:</label>
                                    <textarea class="form-control" id="meta_description" name="meta_description" rows="3" placeholder="Enter meta description for SEO"></textarea>
                                </div>

                                <div class="form-group">
                                    <label for="meta_keywords">Meta Keywords:</label>
                                    <input type="text" class="form-control" id="meta_keywords" name="meta_keywords" placeholder="Enter meta keywords (comma-separated)">
                                </div>

                                <div class="form-group">
                                    <label for="status">Status:</label>
                                    <select class="form-control" id="status" name="status">
                                        <option value="published">Published</option>
                                        <option value="draft">Draft</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                  <label for="add_to">Add To :</label>
                                  <select class="form-control" id="add_to" name="add_to">
                                      <option value="header">Header</option>
                                      <option value="footer">Footer</option>
                                  </select>
                              </div>

                                <br><br>

                                  <!-- Submit Button -->
                                  <button class="btn btn-primary btn-shadow d-block w-100" type="submit">Update</button>
                              </form>

                          </div>
                        </div>
                      </div>
                  </div>


                    <br>
                    <a class="btn btn-primary btn-sm" href="#addPage-modal" data-bs-toggle="modal">اضف صفحه</a></div>
                    <br><br><br>


                    <table class="table table-bordered">
                        <thead>

                          <tr>
                            <th scope="col">#</th>
                            <th scope="col">Page Name</th>
                            <th scope="col">Slug</th>
                            <th scope="col">Meta Description</th>
                            <th scope="col">Meta Keywords</th>
                            <th scope="col">Status</th>
                            <th scope="col">Where</th>
                            <th scope="col">Edit</th>
                            <th scope="col">Delete</th>


                          </tr>
                        </thead>
                        <tbody>
                          @php
                          $i=0;
                          @endphp
                          @foreach ($pages as $item)
                          <tr>
                            @php
                               $i++;
                            @endphp
                            <th scope="row">{{$i}}</th>
                            <td>{{$item->title}}</td>
                            <td>{{$item->slug}}</td>
                            <td>{{$item->meta_description}}</td>
                            <td>{{$item->meta_keywords	}}</td>
                            <td>{{$item->status}}</td>
                            <td>{{$item->add_to}}</td>

                            <td>
                              <button class="btn btn-outline-primary btn-sm" type="button" data-bs-toggle="modal" data-bs-target="#updatePage-modal"
                                  data-id="{{ $item->id}}"
                                  data-title="{{ $item->title }}"
                                  data-slug="{{ $item->slug }}"
                                  data-meta_description="{{ $item->meta_description }}"
                                  data-meta_keywords="{{ $item->meta_keywords }}"
                                  data-status="{{ $item->status }}"
                                  data-add_to="{{ $item->add_to }}"
                                  data-content="{{ $item->content }}"
                                  >
                                  Edit
                              </button>
                          </td>
                            <td><form action="{{ route('pages.destroy', $item->id) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-outline-danger btn-sm" type="submit"><i class="ci-trash me-2"></i>delete</button>
                            </form></td>
                          </tr>
                          @endforeach
                        </tbody>
                    </table>
                </div>
            </section>


          </div>
        </div>
      </div>
    </main>
    <!-- Footer-->
    @include('Includes.footer')

    <!-- Toolbar for handheld devices (NFT Marketplace)-->
    @include('includes.toolbar')

    <!-- Back To Top Button--><a class="btn-scroll-top" href="#top" data-scroll><span class="btn-scroll-top-tooltip text-muted fs-sm me-2">Top</span><i class="btn-scroll-top-icon ci-arrow-up">   </i></a>
    <!-- Vendor scrits: js libraries and plugins-->
    <script src="{{ asset('vendor/bootstrap/dist/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('vendor/simplebar/dist/simplebar.min.js') }}"></script>
    <script src="{{ asset('vendor/tiny-slider/dist/min/tiny-slider.js') }}"></script>
    <script src="{{ asset('vendor/smooth-scroll/dist/smooth-scroll.polyfills.min.js') }}"></script>
    <!-- Main theme script-->
    <script src="{{ asset('js/theme.min.js') }}"></script>


    <script>
      $(document).ready(function() {
          $('#editor2').summernote({
            height: 300,
                height: 300,
                placeholder: 'Type your text here...',
                toolbar: [
                    ['style', ['style']],
                    ['font', ['bold', 'italic', 'underline', 'clear', 'fontname', 'fontsize']],
                    ['color', ['color']],
                    ['para', ['ul', 'ol', 'paragraph']],
                    ['table', ['table']], // Enable table button
                    ['insert', ['link', 'picture', 'video']],
                    ['view', ['fullscreen', 'codeview', 'help']]
                ],
                fontNames: ['Arial', 'Arial Black', 'Comic Sans MS', 'Courier New', 'Merriweather'], // Custom font options
                fontSizes: ['8', '9', '10', '11', '12', '14', '18', '24', '36', '48', '64'], // Font sizes
                styleTags: ['p', 'blockquote', 'pre', 'h1', 'h2', 'h3', 'h4', 'h5', 'h6']
          });
      });
  </script>

<script>
  // Initialize Summernote on document ready
  

  // Handle modal show event to set the form data
  document.addEventListener('DOMContentLoaded', function() {
      var modal = document.getElementById('updatePage-modal');

      modal.addEventListener('show.bs.modal', function (event) {
          var button = event.relatedTarget;
          var title = button.getAttribute('data-title');
          var slug = button.getAttribute('data-slug');
          var meta_description = button.getAttribute('data-meta_description');
          var meta_keywords = button.getAttribute('data-meta_keywords');
          var status = button.getAttribute('data-status');
          var add_to = button.getAttribute('data-add_to');
          var page_id = button.getAttribute('data-id');
          var content = button.getAttribute('data-content');

          // Set the values in the form
          modal.querySelector('#title').value = title;
          modal.querySelector('#slug').value = slug;
          modal.querySelector('#meta_description').value = meta_description;
          modal.querySelector('#meta_keywords').value = meta_keywords;
          modal.querySelector('#status').value = status;
          modal.querySelector('#add_to').value = add_to;

          // Set the content in Summernote
          $(document).ready(function() {
    $('#editor1').summernote({
        height: 300,
        placeholder: 'Type your text here...',
        toolbar: [
            ['style', ['style']],
            ['font', ['bold', 'italic', 'underline', 'clear', 'fontname', 'fontsize']],
            ['color', ['color']],
            ['para', ['ul', 'ol', 'paragraph']],
            ['table', ['table']], // Enable table button
            ['insert', ['link', 'picture', 'video']],
            ['view', ['fullscreen', 'codeview', 'help']]
        ],
        fontNames: ['Arial', 'Arial Black', 'Comic Sans MS', 'Courier New', 'Merriweather'], // Custom font options
        fontSizes: ['8', '9', '10', '11', '12', '14', '18', '24', '36', '48', '64'], // Font sizes
        styleTags: ['p', 'blockquote', 'pre', 'h1', 'h2', 'h3', 'h4', 'h5', 'h6']
    });


    $('#editor1').summernote('code', content);
});

          // Update form action if editing
          var form = modal.querySelector('#update-form');
          form.setAttribute('action', '{{ route("pages.update", ["id" => ":id"]) }}'.replace(':id', page_id));
          form.setAttribute('method', 'POST'); // Switch to PUT method for editing

      });
  });
</script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

<!-- Bootstrap JS -->
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.bundle.min.js"></script>

<!-- Summernote JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.18/summernote-bs4.min.js"></script>


  </body>

<!-- Mirrored from cartzilla.createx.studio/nft-account-settings.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 12 Aug 2022 18:19:25 GMT -->
</html>
