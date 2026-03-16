<x-app-layout>
     @section('title', 'Edit Stage')

     <div class="py-8">
          <div class="max-w-2xl mx-auto px-4 sm:px-6 lg:px-8">
               <a href="{{ route('admin.stages.index') }}" class="text-slate-400 hover:text-white text-sm">← Back to
                    Stages</a>
               <h1 class="text-3xl font-bold text-white mt-2 mb-8">Edit: {{ $stage->title }}</h1>

               <form action="{{ route('admin.stages.update', $stage) }}" method="POST"
                    class="bg-white/5 backdrop-blur-sm rounded-2xl p-8 border border-white/10 space-y-6">
                    @csrf @method('PUT')

                    <div>
                         <label class="block text-sm font-medium text-slate-300 mb-2">Title</label>
                         <input type="text" name="title" value="{{ old('title', $stage->title) }}" required
                              class="w-full bg-white/5 border border-white/10 rounded-xl px-4 py-3 text-white focus:border-purple-500 focus:ring-purple-500">
                         @error('title') <p class="text-red-400 text-sm mt-1">{{ $message }}</p> @enderror
                    </div>

                    <div>
                         <label class="block text-sm font-medium text-slate-300 mb-2">Description</label>
                         <textarea name="description" rows="3"
                              class="w-full bg-white/5 border border-white/10 rounded-xl px-4 py-3 text-white focus:border-purple-500 focus:ring-purple-500">{{ old('description', $stage->description) }}</textarea>
                    </div>

                    <div class="grid grid-cols-2 gap-4">
                         <div>
                              <label class="block text-sm font-medium text-slate-300 mb-2">Order</label>
                              <input type="number" name="order" value="{{ old('order', $stage->order) }}" required
                                   min="1"
                                   class="w-full bg-white/5 border border-white/10 rounded-xl px-4 py-3 text-white focus:border-purple-500 focus:ring-purple-500">
                              @error('order') <p class="text-red-400 text-sm mt-1">{{ $message }}</p> @enderror
                         </div>
                         <div>
                              <label class="block text-sm font-medium text-slate-300 mb-2">Time Limit (minutes)</label>
                              <input type="number" name="time_limit_minutes"
                                   value="{{ old('time_limit_minutes', $stage->time_limit_minutes) }}" required min="1"
                                   max="120"
                                   class="w-full bg-white/5 border border-white/10 rounded-xl px-4 py-3 text-white focus:border-purple-500 focus:ring-purple-500">
                         </div>
                    </div>

                    <div class="grid grid-cols-2 gap-4">
                         <div>
                              <label class="block text-sm font-medium text-slate-300 mb-2">Passing %</label>
                              <input type="number" name="passing_percentage"
                                   value="{{ old('passing_percentage', $stage->passing_percentage) }}" required min="1"
                                   max="100"
                                   class="w-full bg-white/5 border border-white/10 rounded-xl px-4 py-3 text-white focus:border-purple-500 focus:ring-purple-500">
                         </div>
                         <div>
                              <label class="block text-sm font-medium text-slate-300 mb-2">Points Reward</label>
                              <input type="number" name="points_reward"
                                   value="{{ old('points_reward', $stage->points_reward) }}" required min="0"
                                   class="w-full bg-white/5 border border-white/10 rounded-xl px-4 py-3 text-white focus:border-purple-500 focus:ring-purple-500">
                         </div>
                    </div>

                    <button type="submit"
                         class="w-full bg-gradient-to-r from-amber-500 to-orange-500 hover:from-amber-600 hover:to-orange-600 text-white py-3 rounded-xl font-bold transition shadow-lg">
                         Update Stage
                    </button>
               </form>
          </div>
     </div>
</x-app-layout>