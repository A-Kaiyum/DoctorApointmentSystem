<div class="modal fade" id="donnerModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Blood Donner Registration</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form id="contact-form" action="{{route('donateBlood')}}" method="post">
                    @csrf
                    <div class="single-contact-form name">
                        <div class="contact-box name_email">
                            <div class="contact-box">
                                <input type="text" placeholder="Your Name *" name="name">
                            </div>
                            <div class="contact-box">
                                <input type="text" placeholder="Phone *" name="phone">
                            </div>
                        </div>
                    </div>
                    <div class="single-contact-form">
                        <div class="contact-box subject">
                            <input type="text" placeholder="Blood Group*" name="bg_group">
                        </div>
                    </div>
                    <div class="single-contact-form">
                        <div class="contact-box subject">
                            <input type="text" placeholder="Age*" name="age">
                        </div>
                    </div>
                    <div class="single-contact-form">
                        <div class="contact-box subject">
                            <input type="text" placeholder="Address*" name="address">
                        </div>
                    </div>
                    <div class="single-contact-form">
                        <div class="contact-box message">
                            <textarea name="message" placeholder="Message*"></textarea>
                        </div>
                    </div>
                    <div class="contact-btn">
                        <button type="submit">Send Request</button>
                    </div>
                </form>

            </div>
        </div>
    </div>
</div>
