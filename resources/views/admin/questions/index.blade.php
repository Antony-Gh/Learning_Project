<x-app-layout>
     @section('title', 'Questions - ' . $stage->title)

     <div class="py-8">
          <div class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8">
               <div class="flex items-center justify-between mb-8">
                    <div>
                         <a href="{{ route('admin.stages.index') }}" class="text-slate-400 hover:text-white text-sm">←
                              Back to Stages</a>
                         <h1 class="text-3xl font-bold text-white mt-1">📝 {{ $stage->title }} — Questions</h1>
                         <p class="text-slate-400 text-sm">{{ $questions->count() }} questions</p>
                    </div>
                    <a href="{{ route('admin.stages.questions.create', $stage) }}"
                         class="bg-gradient-to-r from-cyan-500 to-blue-500 hover:from-cyan-600 hover:to-blue-600 text-white px-5 py-2 rounded-xl font-medium transition shadow-lg">
                         + Add Question
                    </a>
               </div>

               <div class="space-y-4">
                    @foreach($questions as $index => $question)
                                   <div class="bg-white/5 backdrop-blur-sm rounded-2xl p-6 border border-white/10">
                                        <div class="flex items-start justify-between">
                                             <div class="flex-1">
                                                  <div class="flex items-center space-x-2 mb-2">
                                                       <span class="text-sm font-bold text-slate-400">#{{ $index + 1 }}</span>
                                                       <span class="px-2 py-0.5 rounded text-xs
                                                               {{ $question->difficulty === 'easy' ? 'bg-green-500/20 text-green-400' :
                         ($question->difficulty === 'medium' ? 'bg-amber-500/20 text-amber-400' :
                              'bg-red-500/20 text-red-400') }}">
                                                            {{ ucfirst($question->difficulty) }}
                                                       </span>
                                                  </div>
                                                  <p class="text-white font-medium mb-3">{{ $question->question_text }}</p>
                                                  <div class="grid grid-cols-2 gap-2 text-sm">
                                                       @foreach(['a', 'b', 'c', 'd'] as $opt)
                                                            <div
                                                                 class="p-2 rounded-lg {{ $opt === $question->correct_answer ? 'bg-emerald-500/20 text-emerald-300 ring-1 ring-emerald-500/30' : 'bg-white/5 text-slate-400' }}">
                                                                 <span class="font-bold">{{ strtoupper($opt) }}.</span>
                                                                 {{ $question->{'option_' . $opt} }}
                                                                 @if($opt === $question->correct_answer) <span
                                                                 class="text-emerald-400">✓</span> @endif
                                                            </div>
                                                       @endforeach
                                                  </div>
                                             </div>
                                             <div class="flex items-center space-x-2 ml-4">
                                                  <a href="{{ route('admin.stages.questions.edit', [$stage, $question]) }}"
                                                       class="bg-amber-500/20 hover:bg-amber-500/30 text-amber-400 px-3 py-1.5 rounded-lg text-sm transition">Edit</a>
                                                  <form action="{{ route('admin.stages.questions.destroy', [$stage, $question]) }}"
                                                       method="POST" onsubmit="return confirm('Delete this question?')">
                                                       @csrf @method('DELETE')
                                                       <button
                                                            class="bg-red-500/20 hover:bg-red-500/30 text-red-400 px-3 py-1.5 rounded-lg text-sm transition">Delete</button>
                                                  </form>
                                             </div>
                                        </div>
                                   </div>
                    @endforeach

                    @if($questions->isEmpty())
                         <div class="text-center py-12 text-slate-500">
                              <p class="text-4xl mb-2">📝</p>
                              <p>No questions yet. Add your first question!</p>
                         </div>
                    @endif
               </div>
          </div>
     </div>
</x-app-layout>