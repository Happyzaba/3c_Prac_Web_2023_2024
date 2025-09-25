import { createRoute } from 'react-dom/client'
import { BrowserRouter, Routes , Route , Link} from 'react-router-dom'
import './App.css'
import Home from './pages/Home'
import Cart from './pages/Cart'
import Lista from './pages/Lista'
import Detale from './pages/Detale'

function App() {
  return (
   <BrowserRouter>
   <div className='App'>
    <header className='App-header'>
            <Link to={"/"} className="App-header-Link">Strona główna </Link>
      <h1 className='App-header-h1'>
        Lidlronka
      </h1>
      <Link to={'/cart'} className="App-header-Link"><img src="koszyk.jpg"className="App-header-img"></img> </Link>
    </header>
   
    <nav className='App-nav'>
      <Link to={'/uiy'}>uygfwe</Link>
    </nav>
    <section className='App-section'>
    <Routes>
      <Route path='/' element={<Home />} />
      <Route path='/cart' element={<Cart />} />
      <Route path ='*' element={<h1>404 - Nie znaleziono</h1>}/>
    </Routes>
    </section>
    <footer className='App-footer'>
      <h1 className='App-footer-h1'>
        stopka cwaniaku
      </h1>
    </footer>
    </div>
   </BrowserRouter>
  );
}

export default App;
