
 <a href="{{$details['edit']['url']}}" class="group relative block bg-black rounded">
  <img
    alt="Developer"
    src="https://images.unsplash.com/photo-1603871165848-0aa92c869fa1?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=772&q=80"
    class="absolute inset-0 h-full w-full object-cover opacity-75 transition-opacity group-hover:opacity-50 rounded"
  />

  <div class="relative p-8">
    <p class="text-sm font-medium uppercase tracking-widest text-pink-500">
      Developer
    </p>

    <p class="text-2xl font-bold text-white">{{$texts[0] ?? $details['headline'] }}</p>

    <div class="mt-12 lg:mt-20">
      <div
        class="text-sm text-white translate-y-8 transform opacity-0 transition-all group-hover:translate-y-0 group-hover:opacity-100"
      >
        <p class="">
          {{\Illuminate\Support\Str::limit( $content[0] ?? $details['body'], 148,' ...')}}
        </p>
        <p class="mt-3">
          Published:  {{ $details['created_at'] }}
         </p>
      </div>
    </div>
  </div>
</a>
