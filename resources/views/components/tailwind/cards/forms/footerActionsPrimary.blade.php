@props([
    'cancelText' => '',
    'submitText' => '',
    'cancelAction' => '',
    'submitAction' => '',
    'identification' => '',
])
<!-- Panel footer -->
<div >
    <div class="flex flex-col py-5  mt-4 border-t border-slate-200">
        <div class="flex self-end space-x-3">
            <x-hive-form-button
              id='cancel-{{$identification}}'
              name='cancel-{{$identification}}'
              tag='button'
              size='regular'
              color='white'
              title='{{$cancelText}}'
              type='button'
              wire:click='{{$cancelAction}}'
              />


            <x-hive-form-button
              id='submit-{{$identification}}'
              name='submit-{{$identification}}'
              tag='button'
              color='blue'
              title='{{$submitText}}'
              type='submit'
              wire:click='{{$submitAction}}'
              />

        </div>
    </div>
  </div>
