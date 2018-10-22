        <aside class="col-md-4 blog-sidebar">


          <div class="p-3">
            <h4 class="font-italic">Arhiva</h4>
            <ol class="list-unstyled mb-0">
              @foreach($archives as $archive)
              <li><a href="/?month={{$archive['month']}}&year={{ $archive['year']}}">{{ $archive['month']}} {{ $archive['year']}}</a></li>
              @endforeach
            </ol>
          </div>

          <div class="p-3">
            <h4 class="font-italic">Oznake</h4>
            <ol class="list-unstyled">
              @foreach($tags as $tag)
                <li>#<a href="/posts/tags/{{$tag->name}}">{{$tag->name}}</a></li>
              @endforeach
            </ol>
          </div>
        </aside>