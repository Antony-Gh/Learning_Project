<x-app-layout>
     @section('title', 'Manage Stages')

     <div class="py-8">
          <div class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8">
               <div class="flex items-center justify-between mb-8">
                    <div>
                         <a href="{{ route('admin.dashboard') }}" class="text-slate-400 hover:text-white text-sm">←
                              Admin Dashboard</a>
                         <h1 class="text-3xl font-bold text-white mt-1">📚 Manage Stages</h1>
                    </div>
                    <a href="{{ route('admin.stages.create') }}"
                         class="bg-gradient-to-r from-purple-500 to-pink-500 hover:from-purple-600 hover:to-pink-600 text-white px-5 py-2 rounded-xl font-medium transition shadow-lg">
                         + New Stage
                    </a>
               </div>

               <div class="space-y-4">
                    @foreach($stages as $stage)
                         <div
                              class="bg-white/5 backdrop-blur-sm rounded-2xl p-6 border border-white/10 hover:border-white/20 transition">
                              <div class="flex items-center justify-between">
                                   <div class="flex items-center space-x-4">
                                        <div
                                             class="w-12 h-12 rounded-xl bg-purple-500/20 flex items-center justify-center text-purple-400 font-bold text-xl">
                                             {{ $stage->order }}
                                        </div>
                                        <div>
                                             <h3 class="text-lg font-bold text-white">{{ $stage->title }}</h3>
                                             <div class="flex items-center space-x-3 text-sm text-slate-400">
                                                  <span>⏱ {{ $stage->time_limit_minutes }} min</span>
                                                  <span>📝 {{ $stage->questions_count }} questions</span>
                                                  <span>🎯 {{ $stage->passing_percentage }}%</span>
                                                  <span>🏅 {{ $stage->points_reward }} pts</span>
                                             </div>
                                        </div>
                                   </div>
                                   <div class="flex items-center space-x-2">
                                        <a href="{{ route('admin.stages.questions.index', $stage) }}"
                                             class="bg-cyan-500/20 hover:bg-cyan-500/30 text-cyan-400 px-4 py-2 rounded-xl text-sm transition">
                                             Questions
                                        </a>
                                        <a href="{{ route('admin.stages.edit', $stage) }}"
                                             class="bg-amber-500/20 hover:bg-amber-500/30 text-amber-400 px-4 py-2 rounded-xl text-sm transition">
                                             Edit
                                        </a>
                                        <form action="{{ route('admin.stages.destroy', $stage) }}" method="POST"
                                             onsubmit="return confirm('Delete this stage and all its questions?')">
                                             @csrf @method('DELETE')
                                             <button
                                                  class="bg-red-500/20 hover:bg-red-500/30 text-red-400 px-4 py-2 rounded-xl text-sm transition">
                                                  Delete
                                             </button>
                                        </form>
                                   </div>
                              </div>
                         </div>
                    @endforeach
               </div>
          </div>
     </div>
</x-app-layout>