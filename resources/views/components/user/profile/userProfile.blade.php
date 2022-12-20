<div>
  <x-hive-display-card
  component='forms.sectionPanel'
  title='{{__("Profile")}}'
>
    <!-- User Picture -->
    <section>
        <div class="flex items-center">
            <div class="mr-4">
              <div class="w-20 h-20 bg-slate-100 rounded-full">

               </div>
             </div>
            <button class="btn-sm bg-indigo-500 hover:bg-indigo-600 text-white">Change</button>
        </div>
    </section>

  <!-- User Profile -->
  <section>
       <div class="grid sm:grid-cols-2 sm:items-center gap-4 mt-4">
          <div>
              <x-hive-form-label name="{{__('First Name')}}" for="first_name"/>
              <x-hive-form-input
                name="first_name"
                placeholder="{{__('First Name')}}"
                required="true"
                label="{{__('First Name')}}"
                value="{{ old('first_name', '') }}"
                id="first_name"
                error_message="{{__('Please enter your first name')}}" />
          </div>
          <div>
              <x-hive-form-label name="{{__('Last Name')}}" for="last_name"/>
              <x-hive-form-input
                name="last_name"
                placeholder="{{__('Last Name')}}"
                required="true"
                label="{{__('Last Name')}}"
                value="{{ old('last_name', '') }}"
                id="first_name"
                error_message="{{__('Please enter your last name')}}" />
          </div>
          <div>
              <x-hive-form-label name="{{__('Username')}}" for="username"/>
              <x-hive-form-input
                name="username"
                placeholder="{{__('Username')}}"
                required="true"
                label="{{__('Username')}}"
                value="{{ old('username', '') }}"
                id="username"
                error_message="{{__('Please enter your username')}}" />
          </div>
      </div>
  </section>
  <x-hive-display-card
  component='forms.footerActionsPrimary'
  cancelText='{{__("Cancel")}}'
  submitText='{{__("Save Profile")}}'
  />

</x-hive-display-card>
</div>
