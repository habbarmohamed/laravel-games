
        <div class="alert alert-danger " style="padding: 5px;">
                            
                <ul>
                       
                        @foreach($errors->all() as $error)
                                
                                
                            <li>{{$error}}</li>

                            
                        @endforeach
                            
                </ul>
                        
        </div>
