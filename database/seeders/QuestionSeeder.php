<?php

namespace Database\Seeders;

use App\Models\Question;
use App\Models\Stage;
use Illuminate\Database\Seeder;

class QuestionSeeder extends Seeder
{
     public function run(): void
     {
          $stages = Stage::orderBy('order')->get();

          // Stage 1: Atomic Structure
          $this->seedStage($stages[0]->id, [
               ['What is the atomic number of Carbon?', '4', '6', '8', '12', 'b', 'easy'],
               ['Which subatomic particle has a negative charge?', 'Proton', 'Neutron', 'Electron', 'Photon', 'c', 'easy'],
               ['The nucleus of an atom contains:', 'Electrons only', 'Protons and neutrons', 'Electrons and protons', 'Neutrons only', 'b', 'easy'],
               ['What is the mass number of an atom?', 'Number of protons', 'Number of electrons', 'Protons + Neutrons', 'Protons + Electrons', 'c', 'medium'],
               ['Isotopes differ in the number of:', 'Protons', 'Electrons', 'Neutrons', 'All subatomic particles', 'c', 'medium'],
               ['How many electrons can the first shell hold?', '1', '2', '8', '18', 'b', 'easy'],
               ['What is the electron configuration of Sodium (Na)?', '2,8,2', '2,8,1', '2,7,2', '2,8,3', 'b', 'medium'],
               ['Which element has the atomic number 8?', 'Nitrogen', 'Carbon', 'Oxygen', 'Fluorine', 'c', 'easy'],
               ['Rutherford\'s gold foil experiment proved:', 'Atoms are solid', 'Atoms have a dense positive nucleus', 'Electrons orbit in fixed paths', 'Atoms are mostly empty space with a nucleus', 'd', 'hard'],
               ['The maximum electrons in the third shell is:', '2', '8', '18', '32', 'c', 'hard'],
          ]);

          // Stage 2: Chemical Bonding
          $this->seedStage($stages[1]->id, [
               ['Ionic bonds form between:', 'Two metals', 'Two non-metals', 'A metal and a non-metal', 'Noble gases', 'c', 'easy'],
               ['In a covalent bond, electrons are:', 'Transferred', 'Shared', 'Destroyed', 'Created', 'b', 'easy'],
               ['NaCl is an example of:', 'Covalent bond', 'Ionic bond', 'Metallic bond', 'Hydrogen bond', 'b', 'easy'],
               ['How many covalent bonds can Carbon form?', '1', '2', '3', '4', 'd', 'medium'],
               ['Electronegativity increases across a period because:', 'Atomic radius increases', 'Nuclear charge increases', 'Electron shielding increases', 'Electrons decrease', 'b', 'medium'],
               ['Which molecule is non-polar?', 'H₂O', 'CO₂', 'HCl', 'NH₃', 'b', 'medium'],
               ['Metallic bonds involve:', 'Sharing of electron pairs', 'Transfer of electrons', 'A sea of delocalized electrons', 'Van der Waals forces', 'c', 'medium'],
               ['Diamond is hard because of:', 'Ionic bonds', 'Strong covalent bonds in a giant structure', 'Metallic bonds', 'Weak intermolecular forces', 'b', 'hard'],
               ['The shape of a methane (CH₄) molecule is:', 'Linear', 'Trigonal planar', 'Tetrahedral', 'Octahedral', 'c', 'hard'],
               ['Which has the highest melting point?', 'NaCl', 'CO₂', 'H₂O', 'O₂', 'a', 'hard'],
          ]);

          // Stage 3: Reactions & Equations
          $this->seedStage($stages[2]->id, [
               ['Balance: _ H₂ + _ O₂ → _ H₂O', '1,1,1', '2,1,2', '2,2,2', '1,2,2', 'b', 'easy'],
               ['A combustion reaction always produces:', 'Water only', 'CO₂ only', 'CO₂ and H₂O', 'Oxygen', 'c', 'easy'],
               ['Which is a decomposition reaction?', '2H₂ + O₂ → 2H₂O', '2H₂O → 2H₂ + O₂', 'NaOH + HCl → NaCl + H₂O', 'Zn + CuSO₄ → ZnSO₄ + Cu', 'b', 'medium'],
               ['In an exothermic reaction, energy is:', 'Absorbed', 'Released', 'Neither', 'Destroyed', 'b', 'easy'],
               ['What type of reaction is Zn + CuSO₄ → ZnSO₄ + Cu?', 'Decomposition', 'Synthesis', 'Single displacement', 'Double displacement', 'c', 'medium'],
               ['The law of conservation of mass states:', 'Mass can be created', 'Mass can be destroyed', 'Mass is neither created nor destroyed', 'Mass always increases', 'c', 'easy'],
               ['Catalysts work by:', 'Increasing temperature', 'Lowering activation energy', 'Adding more reactants', 'Changing products', 'b', 'medium'],
               ['The molar mass of H₂O is approximately:', '16 g/mol', '18 g/mol', '20 g/mol', '2 g/mol', 'b', 'medium'],
               ['How many moles of O₂ are needed to react with 4 moles of H₂?', '1', '2', '3', '4', 'b', 'hard'],
               ['An endothermic reaction graph shows:', 'Products lower than reactants', 'Products higher than reactants', 'Equal energy levels', 'No activation energy', 'b', 'hard'],
          ]);

          // Stage 4: Acids, Bases & pH
          $this->seedStage($stages[3]->id, [
               ['A pH of 3 indicates:', 'Strong base', 'Weak base', 'Strong acid', 'Neutral', 'c', 'easy'],
               ['Which is a strong acid?', 'CH₃COOH', 'HCl', 'H₂CO₃', 'C₆H₈O₇', 'b', 'easy'],
               ['Bases taste:', 'Sour', 'Bitter', 'Sweet', 'Salty', 'b', 'easy'],
               ['Neutralization produces:', 'Acid + Base', 'Salt + Water', 'Gas + Water', 'Metal + Salt', 'b', 'easy'],
               ['The pH of pure water is:', '0', '5', '7', '14', 'c', 'easy'],
               ['Which indicator turns pink in a base?', 'Methyl orange', 'Litmus', 'Phenolphthalein', 'Bromothymol blue', 'c', 'medium'],
               ['Acids produce which ion in solution?', 'OH⁻', 'H⁺', 'Na⁺', 'Cl⁻', 'b', 'medium'],
               ['A buffer solution:', 'Changes pH rapidly', 'Resists changes in pH', 'Is always neutral', 'Contains only acid', 'b', 'hard'],
               ['Sulfuric acid (H₂SO₄) is:', 'Monoprotic', 'Diprotic', 'Triprotic', 'Non-acidic', 'b', 'hard'],
               ['If pH = 2, the pOH is:', '2', '7', '12', '14', 'c', 'hard'],
          ]);

          // Stage 5: Organic Chemistry
          $this->seedStage($stages[4]->id, [
               ['Organic chemistry is the study of:', 'All elements', 'Carbon compounds', 'Metals', 'Noble gases', 'b', 'easy'],
               ['The simplest hydrocarbon is:', 'Ethane', 'Methane', 'Propane', 'Butane', 'b', 'easy'],
               ['Alkanes have what type of bonds?', 'Double', 'Triple', 'Single', 'Ionic', 'c', 'easy'],
               ['The general formula for alkanes is:', 'CnH2n', 'CnH2n+2', 'CnH2n-2', 'CnHn', 'b', 'medium'],
               ['Ethanol belongs to which functional group?', 'Aldehyde', 'Ketone', 'Alcohol', 'Carboxylic acid', 'c', 'medium'],
               ['Isomers have the same:', 'Structure', 'Molecular formula', 'Physical properties', 'Functional groups', 'b', 'medium'],
               ['The IUPAC name for CH₃CH₂CH₂CH₃ is:', 'Methane', 'Ethane', 'Propane', 'Butane', 'd', 'medium'],
               ['Unsaturated hydrocarbons contain:', 'Only single bonds', 'Double or triple bonds', 'Ionic bonds', 'No carbon', 'b', 'medium'],
               ['Polymerization is:', 'Breaking large molecules', 'Joining small molecules into large chains', 'A combustion reaction', 'A neutralization reaction', 'b', 'hard'],
               ['The functional group -COOH is:', 'Alcohol', 'Amine', 'Carboxylic acid', 'Ester', 'c', 'hard'],
          ]);
     }

     private function seedStage(int $stageId, array $questions): void
     {
          foreach ($questions as $q) {
               Question::create([
                    'stage_id' => $stageId,
                    'question_text' => $q[0],
                    'option_a' => $q[1],
                    'option_b' => $q[2],
                    'option_c' => $q[3],
                    'option_d' => $q[4],
                    'correct_answer' => $q[5],
                    'difficulty' => $q[6],
               ]);
          }
     }
}
