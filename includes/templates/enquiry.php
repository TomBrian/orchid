<div class="card themeBackgroundColor p-3" style="width:320px;">
    <h2 class="text-center">Questions?</h2>
    <p class="text-light font-weight-bold text-center">Contact us.We will reply as soon as we can.</p>
    <p></p>
    <form id="enquiry" action="enquiry" onsubmit="sendmail(event)">
        <div class="flex">
            <input type="text" placeholder="first name" name="fname" class="form-control m-2 fname" required>
            <input type="text" placeholder="second name" name="sname" class="form-control m-2 sname" required>
        </div>
        <div class="flex">
            <input type="email" name="email" placeholder=" your email" id="email" class="form-control m-2 email" required>
        </div>
        <div class="flex">
            <input type="tel" name="number" placeholder="your number" id="number" class="form-control m-2 number" required>
        </div>

        <div class="flex">
            <textarea name="enquiry" placeholder="your message" id="enquiry" style="height: 100px;" class="form-control m-2 enquiry" required></textarea>
        </div>
        <div class="alert alert-success text-center font-weight-bolder text-light" style="display:none; width:290px; margin:auto; border:none; border-bottom:solid 3px chartreuse; background-color:transparent;"></div>
        <div class="alert alert-danger text-center font-weight-bolder text-light" style="display:none; width:290px; margin:auto; border:none; border-bottom:solid 3px orange; background-color:transparent;"></div>
        <div class="flex justify-content-center">
            <div class="lds-spinner" style="display:none;">
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
            </div>
        </div>
        <div class="flex justify-content-center">
            <button class="btn themedarkbackground p-2 font-weight-bold" style="width:100%;" type="submit">Send message</button>
        </div>
    </form>
</div>