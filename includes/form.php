<form>
    <div class="form-group">
        <label for="firstName">First Name</label>
        <input type="text" class="form-control" id="firstName" aria-describedby="firstNameHelp">
    </div>
    <div class="form-group">
        <label for="lastName">Last Name</label>
        <input type="text" class="form-control" id="lastName" aria-describedby="lastNameHelp">
    </div>
    <div class="form-group">
        <label for="dob">Date of Birth</label>
        <input type="text" class="form-control" id="dob" aria-describedby="dobHelp">
    </div>
    <div class="form-group">
        <label for="specialty">Specialty</label>
        <select class="form-select" aria-label="Default select example" id="specialty">
            <option selected>Select Specialty</option>
            <option value="1">Database Admin</option>
            <option value="2">Software Developer</option>
            <option value="3">Web Administrator</option>
            <option value="4">Other</option>
        </select>
    </div>
    <div class="form-group">
        <label for="email">Email Address</label>
        <input type="email" class="form-control" id="email" aria-describedby="emailHelp">
    </div>
    <div class="form-group">
        <label for="contact">Contact Number</label>
        <input type="text" class="form-control" id="contact" aria-describedby="contactHelp">
    </div>

    <button type="submit" class="btn btn-primary btn-block mt-5">Submit</button>
</form>