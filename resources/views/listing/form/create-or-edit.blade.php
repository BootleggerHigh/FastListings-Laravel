<div class="form-group">
    <label for="name">Enter your name</label>
    <input type="text" class="form-control" id="name" name="name" placeholder="Enter name"
           value="{{old('name')??$listing->name?? ''}}">
</div>
<div class="form-group">
    <label for="address">Enter your address</label>
    <input type="text" class="form-control" id="address" name="address" placeholder="Enter address"
           value="{{old('address')??$listing->address?? ''}}">
</div>
<div class="form-group">
    <label for="website">Enter your website</label>
    <input type="text" class="form-control" id="website" name="website" placeholder="Enter website"
           value="{{old('website')??$listing->website?? ''}}">
</div>

<div class="form-group">
    <label for="email">Email address</label>
    <input type="email" class="form-control" id="email" name="email" placeholder="Enter email"
           value="{{old('email')??$listing->email?? ''}}">
</div>

<div class="form-group">
    <label for="phone">Enter your phone</label>
    <input type="text" class="form-control" id="phone" name="phone" placeholder="Enter phone"
           value="{{old('phone')??$listing->phone?? ''}}">
</div>
<div class="form-group">
    <label for="bio">Enter your bio</label>
    <input type="text" class="form-control" id="bio" name="bio" placeholder="Enter bio"
           value="{{old('bio')??$listing->bio?? ''}}">
</div>
<input type="hidden" name="user_id" value="{{\Illuminate\Support\Facades\Auth::id()}}">
<button type="submit" class="btn btn-primary">Submit</button>
