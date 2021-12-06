<template>
    <div>
        <div class="media simple-post" v-for="post in posts" :key="post.id">
            <img class="mr-3" :src="'img/'+post.image" alt="Generic placeholder image">
            <div class="media-body">
                <h4 class="mt-0">
                    <!-- <router-link :to="'/post/'+post.slug">{{post.title}}</router-link> -->
                    <router-link :to="{ name: 'GetPostDetails', params: {slug:post.slug } }">{{post.title}}</router-link> 
                </h4>
                {{post.body.substr(0,150)}}
            <ul class="list-inline list-unstyled d-flex post-info">
                    <li><span><i class="fa fa-user"></i> posted by : <strong class="text-primary">{{post.user.name}}</strong> </span></li>
                    <li>|</li>
                    <li><span><i class="fa fa-calendar"></i> {{post.added_at}} </span></li>
                    <li>|</li>
                    <span><i class="fa fa-comment"></i> {{post.comments_count}} comments</span>
            </ul>
            </div>
        </div>
        <!-- Pagination -->
        <nav aria-label="...">
          <ul class="pagination float-right">
            <li class="page-item disabled">
              <span class="page-link">Previous</span>
            </li>
            <li class="page-item"><a class="page-link" href="#">1</a></li>
            <li class="page-item active">
              <span class="page-link">
                2
                <span class="sr-only">(current)</span>
              </span>
            </li>
            <li class="page-item"><a class="page-link" href="#">3</a></li>
            <li class="page-item">
              <a class="page-link" href="#">Next</a>
            </li>
          </ul>
        </nav>
    </div>
</template>

<script>
    export default {
        data(){
            return {
                posts:{}
            }
        },
        mounted() {
            console.log('Component mounted.')
            this.getPosts();
        },
        methods:{
            getPosts(){
                axios.get('/api/posts')
                .then(res=>
                    {this.posts=res.data}
                )
                .then(err => console.log(err))
            }
        }
    }
</script>
