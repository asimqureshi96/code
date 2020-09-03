<h5 class="required"><i class="fa fa-address-card mr-1"></i>{{ transUi('Your address') }}</h5>
<p class="help-block normal-text" style="font-size: 15px">{{ transUi('Enter') }} {{ transUi('your address') }}</p>
<address-form
    name="address[work]"
    :address="{{customer()->addresses ? customer()->addresses->where('type', 'work')->first() ?? 'null' : 'null' }}"
    :required="true"
    :required-fields="['line_1', 'city']"
></address-form>
