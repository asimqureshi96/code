
@if($type == 'vip')
    <h3><i class="fa fa-handshake-o"></i> Hi!</h3>
    <h5> You've chosen to register for the VIP Buyer Badge.<br>
        This is Suitable for Event Planners, PA/EA or Agencies who meet the VIP Buyer Criteria.<br>
        <u>Please note</u> you must have a annual events budget of over £80,000 to be considered.<br>
        <a href="{{route('home')}}">Click Here </a> to head back to the home page.
    </h5>
    <h5><i class="fa fa-info-circle mr-1"></i>{{ transUi('Personal information') }}</h5>
    <p
        class="help-block normal-text"
        style="font-size: 17px;"
    >Enter your personal details</p>

    <titles
        title="{{ customer()->title ?? '' }}"
        :required="true"
    ></titles>

    <buzz-input
        name="first_name"
        placeholder="{{ transUi('First name') }}"
        value="{{ customer()->first_name ?? '' }}"
        :required="true"
    ></buzz-input>

    <buzz-input
        name="last_name"
        placeholder="{{ transUi('Last name') }}"
        value="{{ customer()->last_name ?? '' }}"
        :required="true"
    ></buzz-input>

    <buzz-input
        name="job_title"
        placeholder="{{ transUi('Job title') }}"
        value="{{ customer()->job_title ?? '' }}"
        :required="true"
    ></buzz-input>
    <answer
        @if(customer())
        :answer="{{ customer()->getAnswerByIdentifier('job-function') ?? 'null' }}"
        @endif
        :placeholder="('Job Function/Department')"
        :question="{{ $questions['job-function'] }}"
        :show-title="false"
        :required="{{ in_array('job-function', $required) ? 'true' : 'false' }}"
        :column-count="2"
    ></answer>
    <buzz-input
        name="company"
        placeholder="{{ transUi('Company') }}"
        value="{{ customer()->company ?? '' }}"
        :required="true"
    ></buzz-input>

    <answer
        @if(customer())
        :answer="{{ customer()->getAnswerByIdentifier('main-business') ?? 'null' }}"
        @endif
        :placeholder="('Company’s main business')"
        :question="{{ $questions['main-business'] }}"
        :show-title="false"
        :required="{{ in_array('main-business', $required) ? 'true' : 'false' }}"
        :column-count="2"
    >
    </answer>
    <buzz-phone
        name="telephone"
        placeholder="{{ transUi('Telephone') }}"
        value="{{ $phones['telephone'] ?? '' }}"
        :required="true"
    ></buzz-phone>

    <buzz-phone
        name="mobile"
        placeholder="{{ transUi('Mobile') }}"
        value="{{ $phones['mobile'] ?? '' }}"
    ></buzz-phone>

    @if (passwordIsEnabled())
        <h5 class="mt-4"><i class="fa fa-sign-in mr-1"></i>{{ transUi('Login information') }}</h5>
        <p
            class="help-block normal-text"
            style="font-size: 17px;"
        >Enter your desired login details<br>
            Please ensure you enter your business email address, as personal email addresses will all be vetted and may lead to your registration being rejected.
        </p>

    @endif

    <buzz-input
        name="email"
        type="email"
        placeholder="{{ transUi('Email') }}"
        value="{{ customer()->email ?? '' }}"
        :required="true"
    ></buzz-input>

    <buzz-input
        name="email_confirmation"
        type="email"
        placeholder="{{ transUi('Confirm email') }}"
        value="{{ customer()->email ?? '' }}"
        :required="true"
    ></buzz-input>

    @if (passwordIsEnabled())
        <buzz-password
            :optional="{{ passwordIsOptional() ? 'true' : 'false' }}"
            :required="true"
        ></buzz-password>
    @endif


    <h5 class="required">Are you responsible for the management, production or booking of events within your role?
    </h5>
    <answer
        @if(customer())
        :answer="{{ customer()->getAnswerByIdentifier('management-production') ?? 'null' }}"
        @endif
        :question="{{ $questions['management-production'] }}"
        :show-title="false"
        :required="{{ in_array('management-production', $required) ? 'true' : 'false' }}"
    ></answer>
@elseif($type == 'supplier')
    <h3><i class="fa fa-handshake-o"></i> Hi!</h3>
    <h5> You've chosen to register for the Supplier Badge.<br>
        This is Suitable for Suitable for Venues or Event Suppliers.<br>
        <u>Please note</u> you must be currently working within the events industry to be considered.<br>
        <strong>Please note that the show is only open to suppliers on <u>Thursday 24th September.</u></strong><br>
        <a href="{{route('home')}}">Click Here </a> to head back to the home page.
    </h5>
    <h5><i class="fa fa-info-circle mr-1"></i>{{ transUi('Personal information') }}</h5>
    <p
        class="help-block normal-text"
        style="font-size: 17px;"
    >Enter your personal details</p>

    <titles
        title="{{ customer()->title ?? '' }}"
        :required="true"
    ></titles>

    <buzz-input
        name="first_name"
        placeholder="{{ transUi('First name') }}"
        value="{{ customer()->first_name ?? '' }}"
        :required="true"
    ></buzz-input>

    <buzz-input
        name="last_name"
        placeholder="{{ transUi('Last name') }}"
        value="{{ customer()->last_name ?? '' }}"
        :required="true"
    ></buzz-input>

    <buzz-input
        name="job_title"
        placeholder="{{ transUi('Job title') }}"
        value="{{ customer()->job_title ?? '' }}"
        :required="true"
    ></buzz-input>
    <answer
        @if(customer())
        :answer="{{ customer()->getAnswerByIdentifier('job-function') ?? 'null' }}"
        @endif
        :placeholder="('Job Function/Department')"
        :question="{{ $questions['job-function'] }}"
        :show-title="false"
        :required="{{ in_array('job-function', $required) ? 'true' : 'false' }}"
        :column-count="2"
    ></answer>
    <buzz-input
        name="company"
        placeholder="{{ transUi('Company') }}"
        value="{{ customer()->company ?? '' }}"
        :required="true"
    ></buzz-input>

    <answer
        @if(customer())
        :answer="{{ customer()->getAnswerByIdentifier('main-business') ?? 'null' }}"
        @endif
        :placeholder="('Company’s main business')"
        :question="{{ $questions['main-business'] }}"
        :show-title="false"
        :required="{{ in_array('main-business', $required) ? 'true' : 'false' }}"
        :column-count="2"
    >
    </answer>
    <buzz-phone
        name="telephone"
        placeholder="{{ transUi('Telephone') }}"
        value="{{ $phones['telephone'] ?? '' }}"
        :required="true"
    ></buzz-phone>

    <buzz-phone
        name="mobile"
        placeholder="{{ transUi('Mobile') }}"
        value="{{ $phones['mobile'] ?? '' }}"
    ></buzz-phone>

    @if (passwordIsEnabled())
        <h5 class="mt-4"><i class="fa fa-sign-in mr-1"></i>{{ transUi('Login information') }}</h5>
        <p
            class="help-block normal-text"
            style="font-size: 17px;"
        >Enter your desired login details<br>
            Please ensure you enter your business email address, as personal email addresses will all be vetted and may lead to your registration being rejected.
        </p>

    @endif

    <buzz-input
        name="email"
        type="email"
        placeholder="{{ transUi('Email') }}"
        value="{{ customer()->email ?? '' }}"
        :required="true"
    ></buzz-input>

    <buzz-input
        name="email_confirmation"
        type="email"
        placeholder="{{ transUi('Confirm email') }}"
        value="{{ customer()->email ?? '' }}"
        :required="true"
    ></buzz-input>

    @if (passwordIsEnabled())
        <buzz-password
            :optional="{{ passwordIsOptional() ? 'true' : 'false' }}"
            :required="true"
        ></buzz-password>
    @endif

@else
    <h3><i class="fa fa-handshake-o"></i> Hi!</h3>
    <h5> You've chosen to register for the Visitor Buyer Badge<br>
        This is Suitable for Event Planners, PA/EA or Agencies.<br>
        <u>Please note</u> you must be responsible for the production or management of events to be considered.<br>
        <a href="{{route('home')}}">Click Here </a> to head back to the home page.
    </h5>
    <h5><i class="fa fa-info-circle mr-1"></i>{{ transUi('Personal information') }}</h5>
    <p
        class="help-block normal-text"
        style="font-size: 17px;"
    >Enter your personal details</p>

    <titles
        title="{{ customer()->title ?? '' }}"
        :required="true"
    ></titles>

    <buzz-input
        name="first_name"
        placeholder="{{ transUi('First name') }}"
        value="{{ customer()->first_name ?? '' }}"
        :required="true"
    ></buzz-input>

    <buzz-input
        name="last_name"
        placeholder="{{ transUi('Last name') }}"
        value="{{ customer()->last_name ?? '' }}"
        :required="true"
    ></buzz-input>

    <buzz-input
        name="job_title"
        placeholder="{{ transUi('Job title') }}"
        value="{{ customer()->job_title ?? '' }}"
        :required="true"
    ></buzz-input>
    <answer
        @if(customer())
        :answer="{{ customer()->getAnswerByIdentifier('job-function') ?? 'null' }}"
        @endif
        :placeholder="('Job Function/Department')"
        :question="{{ $questions['job-function'] }}"
        :show-title="false"
        :required="{{ in_array('job-function', $required) ? 'true' : 'false' }}"
        :column-count="2"
    ></answer>
    <buzz-input
        name="company"
        placeholder="{{ transUi('Company') }}"
        value="{{ customer()->company ?? '' }}"
        :required="true"
    ></buzz-input>

    <answer
        @if(customer())
        :answer="{{ customer()->getAnswerByIdentifier('main-business') ?? 'null' }}"
        @endif
        :placeholder="('Company’s main business')"
        :question="{{ $questions['main-business'] }}"
        :show-title="false"
        :required="{{ in_array('main-business', $required) ? 'true' : 'false' }}"
        :column-count="2"
    >
    </answer>
    <buzz-phone
        name="telephone"
        placeholder="{{ transUi('Telephone') }}"
        value="{{ $phones['telephone'] ?? '' }}"
        :required="true"
    ></buzz-phone>

    <buzz-phone
        name="mobile"
        placeholder="{{ transUi('Mobile') }}"
        value="{{ $phones['mobile'] ?? '' }}"
    ></buzz-phone>

    @if (passwordIsEnabled())
        <h5 class="mt-4"><i class="fa fa-sign-in mr-1"></i>{{ transUi('Login information') }}</h5>
        <p
            class="help-block normal-text"
            style="font-size: 17px;"
        >Enter your desired login details<br>
            Please ensure you enter your business email address, as personal email addresses will all be vetted and may lead to your registration being rejected.
        </p>

    @endif

    <buzz-input
        name="email"
        type="email"
        placeholder="{{ transUi('Email') }}"
        value="{{ customer()->email ?? '' }}"
        :required="true"
    ></buzz-input>

    <buzz-input
        name="email_confirmation"
        type="email"
        placeholder="{{ transUi('Confirm email') }}"
        value="{{ customer()->email ?? '' }}"
        :required="true"
    ></buzz-input>

    @if (passwordIsEnabled())
        <buzz-password
            :optional="{{ passwordIsOptional() ? 'true' : 'false' }}"
            :required="true"
        ></buzz-password>
    @endif


    <h5 class="required">Are you responsible for the management, production or booking of events within your role?
    </h5>
    <answer
        @if(customer())
        :answer="{{ customer()->getAnswerByIdentifier('management-production') ?? 'null' }}"
        @endif
        :question="{{ $questions['management-production'] }}"
        :show-title="false"
        :required="{{ in_array('management-production', $required) ? 'true' : 'false' }}"
    ></answer>
@endif
