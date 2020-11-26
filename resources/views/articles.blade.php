<!DOCTYPE html>
<html lang="en">
    @extends('layout.head')
<body>
    <div class="container">
    
  
            @forelse($articles as $article)
               
            <div class="row">
                <div class="col">
                    <div class="card" style="width: 18rem;">
                            <div class="card-body">
                                <h5 class="card-title">{{$article->title}}</h5>
                                <h6 class="card-subtitle mb-2 text-muted">{{$article->category}}</h6>
                                <p class="card-text">{{$article->body}}</p>
                            </div>
                    </div>
                </div>
            </div>
                   
             

            @empty
            <p>No articles to show</p>
            @endforelse

        <br/> <br/>

            <form method="post" action="/articles" >
            @csrf
                            
                            
                            <div class="form-group">
                                <label for="exampleInputEmail1">Title</label>
                                <input type="text" name="title"class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                                
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">category</label>
                                <input type="text" name="category" class="form-control" id="exampleInputPassword1">
                            </div>
                           

                            <div class="form-group">
                                <label for="exampleFormControlTextarea1">content</label>
                                <textarea class="form-control" name="content" id="exampleFormControlTextarea1" rows="3"></textarea>
                            </div>
                            <button type="submit" class="btn btn-primary">Add new article</button>
            </form>
      </div>      
</body>
</html>
