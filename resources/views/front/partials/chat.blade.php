<!-- BOTTOM FIXED CHATBOX AREA START -->
<section class="chatbox-area red-bg-gradient">

    <div class="chatbox-header collapsed" data-toggle="collapse" data-target="#chatbox" aria-expanded="false" aria-controls="chatbox">
        <span class="left-side">
            <span class="chatbox-header-text">Live Chat</span>
        </span>
        <span class="right-side">
            <span class="chatbox-minimize"><i class="icon-minus-1"></i></span>
            <span class="chatbox-close"><i class="icon-close"></i></span>
        </span>
    </div>

    <div id="chatbox" class="collapse">

        <!-- Chatbox Form Start -->
        <div class="chat-box-form">
            <div class="live-support-content-header">
                Please complete the following details:
            </div>
            <div class="live-support-form">
                <div class="live-support-form-input-wrapper">

                    <div class="floating-label">
                        <input class="floating-input form-control" id="ls-name" type="text" name="ls-name" placeholder=" "  required>
                        <label for="ls-name">Name*</label>
                    </div>

                    <div class="floating-label">
                        <input class="floating-input form-control" id="ls-id" type="text" name="ls-id" placeholder=" "  required>
                        <label for="ls-id">ID (If Registered)</label>
                    </div>

                    <div class="floating-label">
                        <textarea class="floating-textarea form-control" id="ls-message" name="ls-message" placeholder=" "  required></textarea>
                        <label for="ls-message">Message*</label>
                    </div>

                </div>

                <div class="live-support-send-btn">
                    <button type="submit"><img src="{{asset('frontEnd/assets/img/send-button-black.png')}}"/></button>
                </div>
            </div>
        </div>
        <!-- Chatbox Form End -->

        <!-- Chatbox After Login Start -->
        <div class="chatbox-after-login">
            <!-- Chatbox Body Start -->
            <div class="chatbox-body">

                <div class="chatbox-single-chat message-owner">
                    <div class="chatbox-single-chat-user-image">
                        <img src="{{asset('frontEnd/assets/img/callcenter_woman.png')}}"/>
                    </div>
                    <div class="chatbox-single-chat-user-text">
                        <span class="text">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Nobis ipsa blanditiis quo sequi laboriosam temporibus.
                        </span>
                        <span class="text">
                            Lorem ipsum dolor sit amet consectetur
                        </span>
                        <span class="time">12:40</span>
                    </div>
                </div>

                <div class="chatbox-single-chat chat-agent">
                    <div class="chatbox-single-chat-user-text">
                        <span class="text">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Nobis ipsa blanditiis quo sequi laboriosam temporibus.
                        </span>
                        <span class="text">
                            Lorem ipsum dolor sit amet consectetur
                        </span>
                        <span class="time">12:40</span>
                    </div>
                    <div class="chatbox-single-chat-user-image">
                        <img src="{{asset('frontEnd/assets/img/callcenter_woman.png')}}"/>
                    </div>
                </div>

            </div>
            <!-- Chatbox Body Start -->

            <!-- Chatbox Form Start -->
            <div class="chatbox-form">
                <span class="chatbox-textarea">
                    <textarea name="" id="" cols="30" rows="10" placeholder="Type your message here ..."></textarea>
                </span>
                <span class="chatbox-submit">
                    <button type="submit"><img src="{{asset('frontEnd/assets/img/send-button.png')}}"/></button>
                </span>
            </div>
            <!-- Chatbox Form End -->
        </div>
        <!-- Chatbox After Login End -->


    </div>


</section>
<!--  BOTTOM FIXED CHATBOX AREA END -->
