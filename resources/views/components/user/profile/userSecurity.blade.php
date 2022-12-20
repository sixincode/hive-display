<div>
  <x-hive-display-card
  component='forms.sectionPanel'
  title='{{__("Security")}}'
>
  <!-- User Security -->
  <section>
       <div class="grid sm:grid-cols-2 sm:items-center gap-4 mt-4">
          <div>
              <label class="block text-sm font-medium mb-1" for="first_name">Current Password</label>
              <input id="first_name" class="form-input w-full" type="text" value="Acme Inc.">
            </div>
          <div>
          </div>

          <div>
              <label class="block text-sm font-medium mb-1" for="last_name">New Password</label>
              <input id="last_name" class="form-input w-full" type="text" value="Kz4tSEqtUmA">
          </div>
          <div>
              <label class="block text-sm font-medium mb-1" for="username">Confirm Password</label>
              <input id="username" class="form-input w-full" type="text" value="London, UK">
          </div>
      </div>
  </section>
</x-hive-display-card>
</div>
