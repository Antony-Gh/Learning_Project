<x-app-layout>
     @section('title', 'Create Stage')

     <div class="py-8">
          <div class="max-w-2xl mx-auto px-4 sm:px-6 lg:px-8">
               <a href="{{ route('admin.stages.index') }}" class="text-slate-400 hover:text-white text-sm">← Back to
                    Stages</a>
               <h1 class="text-3xl font-bold text-white mt-2 mb-8">Create New Stage</h1>

               <form action="{{ route('admin.stages.store') }}" method="POST"
                    class="bg-white/5 backdrop-blur-sm rounded-2xl p-8 border border-white/10 space-y-6">
                    @csrf

                    <div>
                         <label class="block text-sm font-medium text-slate-300 mb-2">Title</label>
                         <input type="text" name="title" value="{{ old('title') }}" required
                              class="w-full bg-white/5 border border-white/10 rounded-xl px-4 py-3 text-white placeholder-slate-500 focus:border-purple-500 focus:ring-purple-500">
                         @error('title') <p class="text-red-400 text-sm mt-1">{{ $message }}</p> @enderror
                    </div>

                    <div>
                         <label class="block text-sm font-medium text-slate-300 mb-2">Description</label>
                         <textarea name="description" rows="3"
                              class="w-full bg-white/5 border border-white/10 rounded-xl px-4 py-3 text-white placeholder-slate-500 focus:border-purple-500 focus:ring-purple-500">{{ old('description') }}</textarea>
                         @error('description') <p class="text-red-400 text-sm mt-1">{{ $message }}</p> @enderror
                    </div>

                    <div class="grid grid-cols-2 gap-4">
                         <div>
                              <label class="block text-sm font-medium text-slate-300 mb-2">Order</label>
                              <input type="number" name="order" value="{{ old('order', $nextOrder) }}" required min="1"
                                   class="w-full bg-white/5 border border-white/10 rounded-xl px-4 py-3 text-white focus:border-purple-500 focus:ring-purple-500">
                              @error('order') <p class="text-red-400 text-sm mt-1">{{ $message }}</p> @enderror
                         </div>
                         <div>
                              <label class="block text-sm font-medium text-slate-300 mb-2">Time Limit (minutes)</label>
                              <input type="number" name="time_limit_minutes" value="{{ old('time_limit_minutes', 10) }}"
                                   required min="1" max="120"
                                   class="w-full bg-white/5 border border-white/10 rounded-xl px-4 py-3 text-white focus:border-purple-500 focus:ring-purple-500">
                              @error('time_limit_minutes') <p class="text-red-400 text-sm mt-1">{{ $message }}</p>
                              @enderror
                         </div>
                    </div>

                    <div class="grid grid-cols-2 gap-4">
                         <div>
                              <label class="block text-sm font-medium text-slate-300 mb-2">Passing % (1-100)</label>
                              <input type="number" name="passing_percentage" value="{{ old('passing_percentage', 75) }}"
                                   required min="1" max="100"
                                   class="w-full bg-white/5 border border-white/10 rounded-xl px-4 py-3 text-white focus:border-purple-500 focus:ring-purple-500">
                              @error('passing_percentage') <p class="text-red-400 text-sm mt-1">{{ $message }}</p>
                              @enderror
                         </div>
                         <div>
                              <label class="block text-sm font-medium text-slate-300 mb-2">Points Reward</label>
                              <input type="number" name="points_reward" value="{{ old('points_reward', 100) }}" required
                                   min="0"
                                   class="w-full bg-white/5 border border-white/10 rounded-xl px-4 py-3 text-white focus:border-purple-500 focus:ring-purple-500">
                              @error('points_reward') <p class="text-red-400 text-sm mt-1">{{ $message }}</p> @enderror
                         </div>
                    </div>

                    <button type="submit"
                         class="w-full bg-gradient-to-r from-purple-500 to-pink-500 hover:from-purple-600 hover:to-pink-600 text-white py-3 rounded-xl font-bold transition shadow-lg">
                         Create Stage
                    </button>
               </form>
          </div>
     </div>
</x-app-layout>