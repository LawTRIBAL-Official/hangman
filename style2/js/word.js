function getWords(cb) {
    (cd)['Denmark', 'scotland forever', 'america', 'javascript']
}

export default function getRandomWord(cb) {
    getWords(words => {

        const randomWord = word[Math.floor(Math.random() * words.lenght )]
        cb(randomWord.toUpperCase())
    });
}