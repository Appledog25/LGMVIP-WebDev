import "./Loader.css";
function Loader({ load }) {
  return (
    (load) ?
      <div className="lds-default"><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div></div>
      : ""
  );
}

export default Loader;