<x-layout>
    <div class="container py-md-5 container--narrow">
        <div class="d-flex justify-content-between">
          <h2>{{$post->title}}</h2>
          <span class="pt-2">
            <a href="#" class="text-primary mr-2" data-toggle="tooltip" data-placement="top" title="Edit"><i class="fas fa-edit"></i></a>
            <form class="delete-post-form d-inline" action="#" method="POST">
              <button class="delete-post-button text-danger" data-toggle="tooltip" data-placement="top" title="Delete"><i class="fas fa-trash"></i></button>
            </form>
          </span>
        </div>

        <p class="text-muted small mb-4">
          <a href="#"><img class="avatar-tiny" src="https://gravatar.com/avatar/f64fc44c03a8a7eb1d52502950879659?s=128" /></a>

          {{-- 可以直接使用 format 的原因 :  https://laravel.com/docs/10.x/eloquent-mutators#date-casting --}}
          <a href="#">{{$post->user->username}}</a> 在 {{$post->created_at->format('n/j/Y')}} 進行發佈。
        </p>

        <div class="body-content">
            {{$post->body}}
        </div>
      </div>
</x-layout>
