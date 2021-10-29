describe('Coba Kategori', () => {
    beforeEach(() => {
        cy.visit('http://127.0.0.1:8000/home')
        cy.get('#login').click()
    })
    it('Coba', () => {
        cy.get('#email').type('putri@gmail.com')
        cy.get('#password').type('putri123')
        cy.get('#login').click()
        cy.visit('http://127.0.0.1:8000/contact')
    })
})
describe('Home', () => {
    beforeEach(() => {
        cy.visit('http://127.0.0.1:8000/home')
    })
})