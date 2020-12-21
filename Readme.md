<h1>Peregrine Communications</h1>
<h2>Task: Build responsive website.</h2>
<br/>
<br/>
<h2>Deployment</h2>
<br/>
I have designed the program to work as simply as possible. To run it all you need is Python 3.<br/>
Use the terminal to enter Python-Script-Reader directory and run the command: python index.py<br/>
Once completed within Python-Script-Reader there will be interesting_words.csv.<br/>
This csv will contain a list of words from the .txt files in the textfiles folder. <br/>
These words are longer than 8 letters, the table will show their total occurrences, documents containing them and sentences containing them, sometimes the sentence will contain the word twice.<br/>
I viewed the table in vscode using Excel viewer, however it can be imported to googles sheets.<br/>
<br/>
<br/>
<h2>Use of libraries</h2>
<br/>
I could use libraries such as NLTK.
 
```
vocab = nltk.FreqDist(textexample)
print(vocab.most_common(20))
```
 
The above will return a list with the 20 most used words. <br/>
However, I would like to show my ability to work in python taking into account memory and efficiency, and will therefore try to avoid using libraries where possible in this program.
<br/>
<br/>
<h2>Interpretation</h2>
<br/>
Being asked to look for 'interesting words', to me meant either a word longer than 8 letters or proper nouns, I decided to go with words longer the 8 letters. <br/>This was because I had no way of separating proper nouns from words that just began the sentence, this would mean my top interesting words would likely not be that interesting.
<br/>
<br/>
<h2>Starting thoughts</h2>
<br/>
- When opening the .txt files I will use a context manager to reduce memory leak.<br/>
- I will use a for loop so it goes through one line at a time rather than loading the whole file. This takes into account memory issues which I spoke to David Hills about.<br/>
- I will have to loop over arrays and create a quadratic loop which is not efficient, therefore I will need to implement recursion.<br/>
<br/>
<br/>
<h2>Edge cases</h2>
<br/>
- Hyphenated words are seen as one word however in doc6 line 44 there is the word 'differences--but' I decided to count this as one word unchanged as I was unsure how to categorise it<br/>
<br/>
<br/>
<h2>Summary</h2>
<br/>
I enjoyed this test, it was challenging to start with, but I kept everything as simple as I could while keeping efficiency and memory in mind.<br/>
My first attempt I created the first loop that filtered out the interesting words and the second loop counted the words and merging their docs and sentences.<br/>
I knew I could do better than this as I thought I could do the whole process in one loop, making the process more efficient.<br/>
<br/>
After I had refactored my work I tested both attempts to see the improvements, I was really happy with the results.<br/>
I tested my work with guppy3, timeit and memory_profiler.<br/>
<br/>
<h3>First attempt</h3>
<br/>
Using timeit I tested it 3 times, in each test the program was run 10 times, the results are in seconds from my first attempt:<br/>
Program run 10 times in: 11.365320683<br/>
Program run 10 times in: 12.248684551<br/>
Program run 10 times in: 12.316931788<br/>
<br/>
average: 11.976979007333<br/>
<br/>
The memory test using guppy3 showed:<br/>
Total size = 8671092 bytes.<br/>
<br/>
<h3>Refactored code</h3>
<br/>
Using timeit I tested it 3 times, in each test the program was run 10 times, the results are in seconds from my refactored code:<br/>
Program run 10 times in: 0.9665343700000001<br/>
Program run 10 times in: 0.9260109780000001<br/>
Program run 10 times in: 0.936999086<br/>
<br/>
average: 0.943181478<br/>
<br/>
The memory test using guppy3 showed:<br/>
Total size = 4774120 bytes.<br/>
<br/>
As you can see the refactoring reduced memory usage by half and time by 11 seconds. I'm really happy with this result.
<br/>
<br/>
<h2>First attempt</h2>
<br/>

on nav link items the :hover effect could of been achieved using jQuery but I wanted to show that I could use css to achieve this.

at the start I use bootstraps built it rows and containers for the navbar however I later build these myself to show that I can

I had to use !important 3 times to override bootstraps classes.

planning of using bootstraps containers for responsive layout however
