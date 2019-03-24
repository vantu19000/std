<?php

function contact_form( $atts ) {
    $a = shortcode_atts( array(
        'foo' => 'something',
        'bar' => 'something else',
    ), $atts );

    return '<form>
              <div class="form-row">
                <div class="form-group col-md-4">
                  
                  <!-- Name -->
                  <label>Họ tên</label>
                  <div class="input-group">
                    <input type="text" class="form-control order-1" name="contact-name">
                    <div class="input-group-append order-0">
                      <div class="input-group-text">
                        <svg class="input-group-icon icon-offset icon icon-person" viewBox="0 0 106 106" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                          <path transform="translate(3 3)" d="
                            M0 100 A 50 50 0 0 1 50 60 A 20 20 0 0 1 50 0 A 20 20 0 0 1 50 60 A 50 50 0 0 1 100 100">
                          </path>
                        </svg>
                      </div>
                    </div>
                  </div>

                </div>
                
                
                <div class="form-group col-md-4">
                  
                  <!-- Email -->
                  <label>Email</label>
                  <div class="input-group">
                    <input type="email" class="form-control order-1" name="contact-email">
                    <div class="input-group-append order-0">
                      <div class="input-group-text">
                        <svg class="input-group-icon icon-offset icon icon-envelope" viewBox="0 0 106 106" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                          <path transform="translate(3 3)" d="
                            M0 30 V 10 H 100 V 90 H 0 V 30 L 50 60 L 100 30">
                          </path>
                        </svg>
                      </div>
                    </div>
                  </div>

                </div>
                
                <div class="form-group col-md-4">
                  
                  <!-- Phone -->
                  <label>Số đt</label>
                  <div class="input-group">
                    <input type="text" class="form-control order-1" name="contact-phone">
                    <div class="input-group-append order-0">
                      <div class="input-group-text">
                        <svg class="input-group-icon icon-offset icon icon-support" viewBox="0 0 106 106" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                          <path transform="translate(3 3)" d="
                            M0 30 V 10 H 100 V 90 H 0 V 30 L 50 60 L 100 30">
                          </path>
                        </svg>
                      </div>
                    </div>
                  </div>

                </div>
                
                
              </div> <!-- / .form-row -->
              
              <div class="form-row">
                <div class="form-group col-12">
                  
                  <!-- Message -->
                  <label>Bình luận của bạn</label>
                  <textarea class="form-control" name="contact-message" rows="7"></textarea>
                  
                </div>
              </div> <!-- / .form-row -->
              <div class="form-row">
                <div class="col-12">
                  
                  <!-- Submit -->
                  <button type="button" class="btn btn-outline-primary" style="width: 100%">
                    Gửi liên hệ
                  </button>

                </div>
              </div>
            </form>';
}


add_shortcode( 'contact_form', 'contact_form' );
