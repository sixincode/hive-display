@props([
    'cancelText' => '',
    'submitText' => '',
])
<!-- Panel footer -->
<footer>
    <div class="flex flex-col py-5 mt-8 border-t border-slate-200">
        <div class="flex self-end">
            <button class="btn border-slate-200 hover:border-slate-300 text-slate-600">
              {{$cancelText}}
            </button>
            <button type="submit" class="btn bg-indigo-500 hover:bg-indigo-600 text-white ml-3">
              {{$submitText}}
            </button>
        </div>
    </div>
</footer>
